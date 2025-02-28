<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/css/app.css'])
</head>
<body >

  <div class="flex h-screen bg-indigo-700">
    <div class="w-full max-w-xs m-auto bg-indigo-100 rounded p-5">   
          <header>
            <img class="w-20 mx-auto mb-5" src="{{ asset('build/assets/bank_2830289.png') }}" />
          </header>   
          <form>
            <div>
              <label class="block mb-2 text-indigo-500" for="username">UserID</label>
              <input class="w-full p-2 mb-6 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300" type="text" name="username">
            </div>
            <div>
              <label class="block mb-2 text-indigo-500" for="password">PIN/Password</label>
              <input class="w-full p-2 mb-6 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300" type="password" name="password">
            </div>
            <div>          
              <input class="w-full bg-indigo-700 hover:bg-pink-700 text-white font-bold py-2 px-4 mb-6 rounded" type="submit">
            </div>       
          </form>  
          <footer>
            <a class="text-indigo-700 hover:text-pink-700 text-sm float-left" href="#">Forgot Password?</a>
            <a class="text-indigo-700 hover:text-pink-700 text-sm float-right" href="/register">Create Account</a>
          </footer>   
        </div>
    </div>
</body>
</html>
