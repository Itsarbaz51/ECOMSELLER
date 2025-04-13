<x-app-layout title="account-details">
    <main class="pt-90">
        <div class="mb-4 pb-4"></div>
        <section class="my-account container">
            <h2 class="page-title">Account Details</h2>
            <div class="row">
                <div class="col-lg-3">
                    @include('user.account-nav')
                </div>
                <div class="col-lg-9">

                    <div class="page-content my-account__edit">
                        <div class="my-account__edit-form">
                            @if (Session::has('success'))
                                <div class="alert alert-success">{{ Session::get('success') }}</div>
                            @endif

                            <form action="{{ route('user.account.details.update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $user->id }}" />
                                @method('PUT')

                                <div class="row">
                                    <!-- Name -->
                                    <div class="col-md-6">
                                        <div class="form-floating my-3">
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Full Name" value="{{ $user->name }}" required>
                                            <label for="name">Name</label>
                                        </div>
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Phone -->
                                    <div class="col-md-6">
                                        <div class="form-floating my-3">
                                            <input type="text" class="form-control" id="mobile" name="phone"
                                                placeholder="Mobile Number" value="{{ $user->mobile }}" required>
                                            <label for="mobile">Mobile Number</label>
                                        </div>
                                        @error('phone')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Email -->
                                    <div class="col-md-12">
                                        <div class="form-floating my-3">
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Email Address" value="{{ $user->email }}" required>
                                            <label for="email">Email Address</label>
                                        </div>
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Password Section -->
                                    <div class="col-md-12 my-3">
                                        <h5 class="text-uppercase mb-0">Password Change (Optional)</h5>
                                    </div>

                                    <!-- Old Password -->
                                    <div class="col-md-12">
                                        <div class="form-floating my-3">
                                            <input type="password" class="form-control" id="old_password"
                                                name="old_password" placeholder="Old password">
                                            <label for="old_password">Old password</label>
                                        </div>
                                        @error('old_password')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- New Password -->
                                    <div class="col-md-12">
                                        <div class="form-floating my-3">
                                            <input type="password" class="form-control" id="new_password"
                                                name="new_password" placeholder="New password">
                                            <label for="new_password">New password</label>
                                        </div>
                                        @error('new_password')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Confirm Password (Use standard Laravel name) -->
                                    <div class="col-md-12">
                                        <div class="form-floating my-3">
                                            <input type="password" class="form-control" id="new_password_confirmation"
                                                name="new_password_confirmation" placeholder="Confirm new password">
                                            <label for="new_password_confirmation">Confirm new password</label>
                                        </div>
                                        @error('new_password_confirmation')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Submit -->
                                    <div class="col-md-12">
                                        <div class="my-3">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
</x-app-layout>
