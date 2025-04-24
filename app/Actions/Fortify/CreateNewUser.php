<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\Score;
use App\Models\Upgrade;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();

        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

        Score::create([
            'user_id' => $user->id,
            'total' => 0,
        ]);

        Upgrade::create([
            'user_id' => $user->id,
            'loop_enhancer' => 0,
            'stack_overdrive' => 0,
            'bit_slpitter' => 0,
            'garbage_collector' => 0,
        ]);

        return $user;
    }
}
