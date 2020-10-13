 @extends('auth.main')
@section('content')
<div class=" container" >
<div class=" register">
    <style>.register div div div {
    max-width: 70%;
    
}</style>
<x-guest-layout >
                   

    <x-jet-authentication-card >
        

        <x-slot name="logo" >
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />
        
	
<!--content-->

    
	<h1>Register!</h1>
        <form method="post" action="{{ route('register')  }}"> 
            @csrf
            <div class="col-md-6 register-top-grid">
                <h3>Personal infomation</h3>
                    <div>
                           <span>Name</span>
                           <x-jet-input type="text"  name="name" :value="old('name')" required autofocus autocomplete="name"/> 
                    </div>					 
                    <div>
                            <span>Email Address</span>
                            <x-jet-input type="text"  name="email"  :value="old('email')" required/> 
                    </div>

            </div>
            <div class="col-md-6 register-bottom-grid">
                <h3>Login information</h3>
                    <div>
                           <span>Password</span>
                           <x-jet-input type="password"  name="password" required autocomplete="new-password"/>
                    </div>
                    <div>
                           <span>Confirm Password</span>
                           <x-jet-input type="password"  name="password_confirmation" required autocomplete="new-password"/>
                    </div>
                    <input type="submit" value="submit"/>
                    

            </div>
            <div class="clearfix"> </div>
        </form>
    


    </x-jet-authentication-card>

</x-guest-layout>
    </div>
</div>
<!--//content-->
@endsection
