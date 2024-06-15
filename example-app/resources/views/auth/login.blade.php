<x-guest-layout>
   <!-- Session Status -->
   <x-auth-session-status class="mb-4" :status="session('status')" />
   <form method="POST" action="{{ route('login') }}">
      @csrf
      <div class="input-group mb-5">
         <div class="input-group-append">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
         </div>
        <x-text-input id="email" class="form-control input_user" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"  placeholder="username" style="width:50px;" />
      </div>
      <x-input-error :messages="$errors->get('email')" class="mt-2" /><br>
      <div class="input-group mb-2">
         <div class="input-group-append">
            <span class="input-group-text"><i class="fas fa-key"></i></span>
         </div>
         <input  class="form-control input_pass" id="password" type="password" name="password"
            required autofocus autocomplete="password"  :value="old('password')" placeholder="password">
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
      </div>
      <div class="form-group">
         <div class="custom-control custom-checkbox">
            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
         </div>
      </div>
      <div class="d-flex justify-content-center mt-3 login_container">
       
         <button type="submit" name="button" class="btn login_btn">  {{ __('Log in') }}</button>
      </div>
   </form>
   </div>
   <div class="mt-4">
      <div class="d-flex justify-content-center links">
         @if (Route::has('register'))
         Don't have an account? <a href="{{ route('register') }}" class="ml-2">Sign Up</a>
        
         </a>
         @endif
      </div>
      <div class="d-flex justify-content-center links">
         @if (Route::has('password.request'))
         <a href="{{ route('password.request') }}"> {{ __('Forgot your password?') }}</a>
         @endif
      </div>
   </div>
</x-guest-layout>