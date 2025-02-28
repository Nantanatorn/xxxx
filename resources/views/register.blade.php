<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite(['resources/css/app.css'])
</head>
<body>

  <div class="flex h-screen bg-indigo-700">
    <div class="w-full max-w-xs m-auto bg-indigo-100 rounded p-5">   
          <header>
            <img class="w-20 mx-auto mb-5" src="{{ asset('assets/bank_2830289.png') }}" alt="Bank Logo" />
          </header>   

          <!-- Register Form -->
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div>
              <label class="block mb-2 text-indigo-500" for="firstname">Firstname</label>
              <input class="w-full p-2 mb-6 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300" 
                     type="text" name="firstname" required>
            </div>
            <div>
                <label class="block mb-2 text-indigo-500" for="surname">Surname</label>
                <input class="w-full p-2 mb-6 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300" 
                       type="text" name="surname" required>
            </div>
            <div>
                <label class="block mb-2 text-indigo-500" for="idcard">ID Card</label>
                <input class="w-full p-2 mb-6 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300" 
                       type="text" name="idcard" required>
            </div>
            <div>
              <label class="block mb-2 text-indigo-500" for="phone">Phone</label>
              <input class="w-full p-2 mb-6 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300" 
                     type="tel" name="phone" required>
            </div>
            <div>
                <label class="block mb-2 text-indigo-500" for="email">Email</label>
                <input class="w-full p-2 mb-6 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300" 
                       type="email" name="email" required>
            </div>
            <div>
                <label class="block mb-2 text-indigo-500" for="password">Password</label>
                <input class="w-full p-2 mb-6 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300" 
                       type="password" name="password" required>
            </div>
            <div>          
              <button type="submit" class="w-full bg-indigo-700 hover:bg-pink-700 text-white font-bold py-2 px-4 mb-6 rounded">
                Register
              </button>
            </div>       
          </form>  

          <footer>
            <a class="text-indigo-700 hover:text-pink-700 text-sm float-left" href="#">Forgot Password?</a>
            <a class="text-indigo-700 hover:text-pink-700 text-sm float-right" href="{{ route('login') }}">Already have an account? Login</a>
          </footer>   
    </div>
  </div>

</body>
</html>
