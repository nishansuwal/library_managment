@extends('admin.layout')
@section('main')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Edit Student Details</h2>
            <form method="POST" action="{{ route('admin.student.update', $student->id) }}">
                @csrf
             

                <!-- Name -->
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}" required>
                </div>

                <!-- Email Address -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $student->email }}" required>
                </div>

                <!-- Address -->
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ $student->address }}" required>
                </div>

                <!-- Batch -->
                <div class="form-group">
                    <label for="batch">Batch</label>
                    <input type="text" class="form-control" id="batch" name="batch" value="{{ $student->batch }}" required>
                </div>
                  <!-- Password -->
                <div class="mb-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                </div>
                <div class="form-group">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
