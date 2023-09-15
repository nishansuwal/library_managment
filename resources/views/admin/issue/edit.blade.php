@extends('admin.layout')
@section('main')
    <div class="container mt-12">
        <h3>Edit bookIssue details</h3>
        <form method="post" action="{{ route('admin.issue.update', ['id' => $bookissue->id]) }}">
            @csrf
            <div class="card">
                <div class="card-body">
                    <!-- Student ID -->
                    <div class="mb-4">
                        <x-input-label for="student_id" :value="__('Student ID')" />
                        <x-text-input id="student_id" class="block mt-1 w-full" type="number" name="student_id"
                            :value="$bookissue->student_id" required autofocus />
                        <x-input-error :messages="$errors->get('student_id')" class="mt-2" />
                    </div>

                    <!-- Book ID -->
                    <div class="mb-4">
                        <x-input-label for="book_id" :value="__('Book ID')" />
                        <x-text-input id="book_id" class="block mt-1 w-full" type="number" name="book_id"
                            :value="$bookissue->book_id" required />
                        <x-input-error :messages="$errors->get('book_id')" class="mt-2" />
                    </div>

                    <!-- Fine -->
                    <div class="mb-4">
                        <x-input-label for="fine" :value="__('Fine')" />
                        <x-text-input id="fine" class="block mt-1 w-full" type="number" name="fine"
                            :value="$bookissue->fine" required />
                        <x-input-error :messages="$errors->get('fine')" class="mt-2" />
                    </div>

                    <!-- Issue Date -->
                    <div class="mb-4">
                        <x-input-label for="issue" :value="__('Issue Date')" />
                        <x-text-input id="issue" class="block mt-1 w-full" type="text" name="issue"
                            :value="$bookissue->issue" required />
                        <x-input-error :messages="$errors->get('issue')" class="mt-2" />
                    </div>

                    <!-- Due Date -->
                    <div class="mb-4">
                        <x-input-label for="due" :value="__('Due Date')" />
                        <x-text-input id="due" class="block mt-1 w-full" type="text" name="due"
                            :value="$bookissue->due" required />
                        <x-input-error :messages="$errors->get('due')" class="mt-2" />
                    </div>

                    <!-- Return Date -->
                    <div class="mb-4">
                        <x-input-label for="return" :value="__('Return Date')" />
                        <x-text-input id="return" class="block mt-1 w-full" type="text" name="return"
                            :value="$bookissue->return" required />
                        <x-input-error :messages="$errors->get('return')" class="mt-2" />
                    </div>

                    <button type="submit" style="margin: 1rem;" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
