<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Contracts\Auth\UserProvider;

class ResetPassword extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:reset {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Reset a user's password";

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $email = $this->argument('email');
        $user = User::where(compact('email'))->first();

        if (empty($user)) {
            $this->error("User '$email' not found");
            return;
        }

        if ($this->confirm('Let system generate password for you?')) {
            $password = str_random(16);
            $this->info("Your password: $password");
        } else {
            $password = $this->secret('Please enter your new password');
        }

        $password = bcrypt($password);
        $user->password = $password;
        $user->save();
    }
}
