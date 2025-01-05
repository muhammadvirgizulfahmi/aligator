    @include('home.navbar')
    <x-auth-session-status class="mb-4" :status="session('status')" />
        <style>
                    .container {
                background-color: #fff;
                padding: 30px;
                border-radius: 5px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                width: 350px;
                margin: 50px auto;
            }
            h2 {
                text-align: center;
                margin-bottom: 20px;
            }
            input {
                width: 100%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                margin-bottom: 15px;
            }
            button {
                background-color: #007bff;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                width: 100%;
            }
            button:hover {
                background-color: #0069d9;
            }
        </style>
        <!-- Form Login -->
        <div class="container">
            <h2>Login</h2>
            @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Masukan Email" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Masukan Password" required>
                <button type="submit">Login</button>
            </form>
        </div>
        
    @include('home.footer')