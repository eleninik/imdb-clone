
@if(Auth::user()->name === $user["name"])
    <ul class="profile-options">
        <li>
        <a class="option" href="/user/profile/{{$user['name']}}/pic">Change profile picture</a>
        </li>
        <li>
            <a class="option" href="/user/profile/{{$user['name']}}/pw">Change password</a>
        </li>
        <li>
            <a class="option" href="/user/profile/{{$user['name']}}/deleteacc">Delete account</a>
        </li>
        <li>
            <a class="option" href="/user/profile/{{$user['name']}}"> Watchlist </a> 
         </li>
         <li>
            <p class="welcome"> Welcome {{$user['name']}}! </p>    
        </li>
    </ul>
 @endif