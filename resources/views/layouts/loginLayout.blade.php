<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="C:\Users\Lenovo\Desktop\lha-horizon-travel\bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('pageacceuil')}}\biblio.css">
    <link rel="stylesheet" href="C:\Users\Lenovo\Desktop\TP1\bootstrap.min.css">
    <title>site touristique </title>
</head>

<body>
    

    <section class="section_service text-center">
        <div class="overlay">
            <div class="container">
            @yield('content')
                <div class="section_content">
                    <h3 class="biblio-title"></h3>
                    <p class="Llead desc-section">
                    </p>
                    
                </div>


            </div>

        </div>
    </section>
</body>

</html>