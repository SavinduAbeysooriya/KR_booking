<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ProfileVerification extends Component
{
    public $phone_number;
    public $address;
    public $date_of_birth;
       public $gender ;
    public $national_id_or_passport;
    public $otp;
    public $showOtpField = false;
    public $verificationSuccess = false;

      public $isVerified = false;



    protected $rules = [
        'phone_number' => 'required|string|max:20',
        'address' => 'required|string|max:255',
        'date_of_birth' => 'required|date',
        'national_id_or_passport' => 'required|string|max:50',
         'gender' => 'required|in:male,female,other', // Add gender validation
    ];

    // public function mount()
    // {
    //     $user = Auth::user();
    //     $this->phone_number = $user->phone_number;
    //     $this->address = $user->address;
    //     $this->date_of_birth = $user->date_of_birth;
    //     $this->national_id_or_passport = $user->national_id_or_passport;
    // }

      public function mount()
    {
        $user = Auth::user();
        $this->isVerified = $user->status === 'verified'; // Check verification status

        if (!$this->isVerified) {
            $this->phone_number = $user->phone_number;
            $this->address = $user->address;
            $this->date_of_birth = $user->date_of_birth;
            $this->national_id_or_passport = $user->national_id_or_passport;
          $this->gender = $user->gender; // Initialize gender

        }
    }

    public function submitDetails()
    {
        $this->validate();

        // Save the details first
        $user = User::find(Auth::id());
        $user->update([
            'phone_number' => $this->phone_number,
            'address' => $this->address,
            'date_of_birth' => $this->date_of_birth,
            'national_id_or_passport' => $this->national_id_or_passport,
            'gender' => $this->gender,
        ]);

        // Generate and send OTP (implementation depends on your SMS gateway)
        $otp = rand(100000, 999999);
        session(['verification_otp' => $otp]);

        // This is a placeholder - replace with actual SMS sending logic
        $this->sendOtp($this->phone_number, $otp);

        $this->showOtpField = true;
        session()->flash('message', 'OTP sent to your phone number.');
    }

    // protected function sendOtp($phoneNumber, $otp)
    // {
    //     // Implement your actual SMS gateway integration here
    //     // Example with Twilio (you'd need to install the SDK):

    //     $twilio = new \Twilio\Rest\Client(env('TWILIO_SID'), env('TWILIO_TOKEN'));
    //     $twilio->messages->create(
    //         $phoneNumber,
    //         [
    //             'from' => env('TWILIO_FROM'),
    //             'body' => "Your verification OTP is: $otp"
    //         ]
    //     );


    //     // For development, just log the OTP
    //     Log::info("OTP for $phoneNumber: $otp");
    // }


//this will not use the production , this for testing and SSL certificate working one is commented
    protected function sendOtp($phoneNumber, $otp)
{
    try {
        $phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);
        if (!str_starts_with($phoneNumber, '+')) {
            $phoneNumber = '+94' . ltrim($phoneNumber, '0');
        }

        $httpClient = new \Twilio\Http\CurlClient([
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false
        ]);

        $client = new \Twilio\Rest\Client(
            env('TWILIO_SID'),
            env('TWILIO_TOKEN'),
            null,
            null,
            $httpClient
        );




        $message = $client->messages->create(
            $phoneNumber,
            [
                'from' => env('TWILIO_FROM'),
                'body' => "Your verification OTP is: $otp"
            ]
        );

        Log::info("OTP sent to $phoneNumber via Twilio. SID: " . $message->sid);
        return true;
    } catch (\Exception $e) {
        Log::error("Twilio SMS error: " . $e->getMessage());
        session()->flash('error', 'Failed to send OTP. Please try again later.');
        return false;
    }
}

    public function verifyOtp()
    {
        $this->validate([
            'otp' => 'required|numeric|digits:6'
        ]);

        if (session('verification_otp') == $this->otp) {
            $user = User::find(Auth::id());
            $user->update([
                'status' => 'verified'
            ]);

            $this->verificationSuccess = true;
            session()->forget('verification_otp');
            session()->flash('success', 'Your profile has been verified successfully!');
        } else {
            $this->addError('otp', 'Invalid OTP. Please try again.');
        }
    }

    public function render()
    {
        return view('livewire.profile-verification');
    }
}
