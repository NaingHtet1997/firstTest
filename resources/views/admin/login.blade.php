

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card body-content">
                <div class="card-header">Admin Login</div>

                <div class="card-body">
                    <form id="login-form" name="login-form" class="nobottommargin" action="{{route('admin.login')}}" method="post">
        
        {{ csrf_field() }}

        <div class="form-group">
            <input name="email" class="form-control input-lg" placeholder="email" type="text">
        </div>

        <div class="form-group">
            <input name="password" class="form-control input-lg" placeholder="Password" type="password">
        </div>

        <div class="form-actions">
            <div id="working"></div>
            <button class="btn green uppercase btn-block" id="login-form-submit" >Login</button>
        </div>

    </form>
                </div>
            </div>
        </div>
    </div>
</div>
