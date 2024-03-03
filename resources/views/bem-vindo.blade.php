Site da Aplicação

@auth
    <h1>Usuario autenticado</h1>
    <p>
       ID {{Auth::user()->id}}
    </p>
    <p>
       Nome {{Auth::user()->name}}
    </p>
    <p>
       Email {{Auth::user()->email}}
    </p>

@endauth

@guest
    <h1>Piroca
    </h1>
@endguest