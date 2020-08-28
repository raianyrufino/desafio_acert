<HTML>

    <h3> Github Users </h3>

    <div>
        <p>Enter the name of the user you want to search:</p>

        <form method="get" action="/users/">
            <input type="text" name="name" />
            <button 
                type="submit" 
                value="name"
            >
                Search
            </button>
        </form>
    </div>

    <div>
        @if ($user ?? '')
            <h3>User Details:</h3><br/>
            <strong>Login:</strong> {{ $user->login }}
            <br/><strong>Name:</strong> {{ $user->name }}
            <br/><strong>Url:</strong> {{ $user->url }}
            <br/><strong>Location:</strong> {{ $user->location }}
            <br/><strong>Bio:</strong> {{ $user->bio }}
            <br/><strong>Location:</strong> {{ $user->location }}
            <br/><strong>Followers:</strong> {{ $user->followers }}
            <br/><strong>Following:</strong> {{ $user->following }}
            <br/><strong>Public Repositories:</strong> {{ $user->public_repos }}
        @endif 
    </div>

</HTML>
