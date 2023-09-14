@extends('admin.layout')
@section('main')
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="bg-white p-8 rounded shadow-md w-96">
            <h2 class="text-2xl font-semibold mb-6">{{ __('ISSUE BOOK TO STUDENT') }}</h2>
            <form method="POST" action="{{ route('admin.issue.store') }}">
                @csrf

                <!-- Student ID -->
                <div class="mb-4">
                    <x-input-label for="student_id" :value="__('Student ID')" />
                    <x-text-input id="student_id" class="block mt-1 w-full" type="number" name="student_id" :value="old('student_id')"
                        required autofocus />
                    <x-input-error :messages="$errors->get('student_id')" class="mt-2" />
                </div>

                <!-- Book ID -->
                <div class="mb-4">
                    <x-input-label for="book_id" :value="__('Book ID')" />
                    <x-text-input id="book_id" class="block mt-1 w-full" type="number" name="book_id" :value="old('book_id')"
                        required />
                    <x-input-error :messages="$errors->get('book_id')" class="mt-2" />
                </div>

                <!-- Fine -->
                <div class="mb-4">
                    <x-input-label for="fine" :value="__('Fine')" />
                    <x-text-input id="fine" class="block mt-1 w-full" type="number" name="fine" :value="old('fine')"
                        required />
                    <x-input-error :messages="$errors->get('fine')" class="mt-2" />
                </div>

                <!-- Issue Date -->
                <div class="mb-4">
                    <x-input-label for="issue" :value="__('Issue Date')" />
                    <x-text-input id="issue" class="block mt-1 w-full" type="text" name="issue" :value="old('issue', date('Y-m-d'))"
                        required />
                    <x-input-error :messages="$errors->get('issue')" class="mt-2" />
                </div>

                <!-- Due Date -->
                <div class="mb-4">
                    <x-input-label for="due" :value="__('Due Date')" />
                    <x-text-input id="due" class="block mt-1 w-full" type="text" name="due" :value="old('due', date('Y-m-d', strtotime('+30 days')))"
                        required />
                    <x-input-error :messages="$errors->get('due')" class="mt-2" />
                </div>

                <!-- Return Date -->
                <div class="mb-4">
                    <x-input-label for="return" :value="__('Return Date')" />
                    <x-text-input id="return" class="block mt-1 w-full" type="text" name="return" :value="old('return', ('20YY-MM-DD'))"
                        required />
                    <x-input-error :messages="$errors->get('return')" class="mt-2" />
                </div>

                <div class="mb-4">
                    <!-- You can add more fields or customize the layout as needed -->
                </div>

                <div class="mb-4">
                    <button type="submit" class="bg-dark hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        {{ __('Submit') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
