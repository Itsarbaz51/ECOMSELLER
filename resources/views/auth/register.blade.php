<x-app-layout title="register">
    <style>
        @media (min-width: 1024px) {
            .containerRegister {
                margin: 0 300px;
            }

            .formRegister-1 {
                margin: 0 50px;
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 10px;
            }

            .formRegister-2 {
                margin: 0 50px;
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 10px;
            }

            .regterbtn {
                width: calc(100% - 100px);
                margin-left: 50px;
            }

        }
    </style>

    <div class="containerRegister mt-5 " style="margin: 0 18px;">
        <h3 class="mb-4">Register</h3>

        @if ($errors->any())
            <div class="alert alert-danger">{{ implode(', ', $errors->all()) }}</div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="formRegister-1">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input name="name" type="text" class="form-control" required value="{{ old('name') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" required value="{{ old('email') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Mobile</label>
                    <input name="mobile" type="text" class="form-control" required maxlength="10"
                        value="{{ old('mobile') }}">
                </div>
            </div>

            <div class="formRegister-2">
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input name="password_confirmation" type="password" class="form-control" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary regterbtn">Register</button>
        </form>
    </div>
</x-app-layout>
