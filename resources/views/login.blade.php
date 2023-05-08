<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Connexion</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @extends('forme.asset-css')

</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">Connexion</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Connexion-utilisateur</h5>
                    <p class="text-center small">Entrez votre email et mot de passe</p>
                  </div>

                  <form class="row g-3 needs-validation"  action="{{ url('Utilisateur/login') }}" method="POST">
                  @csrf
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}" required>
                        <div class="invalid-feedback">Entrez votre email!</div>
                      </div>
                    </div>

                    <div class="col-12">
                        <label for="yourPassword" class="form-label">Mot de passe</label>
                        <input type="password" name="password" class="form-control" id="password" value="{{ old('password') }}" required>
                        <div class="invalid-feedback">Entrez votre mot de passe!</div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">Se connecter</button>
                    </div>
                </form>

            </div>
        </div>
        @if(session()->has('failure'))
        <label for="yourPassword" class="form-label" style="color: rgb(255, 0, 0)">{{ session('failure') }}</label>
        @endif
            </div>

          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


</body>

</html>
