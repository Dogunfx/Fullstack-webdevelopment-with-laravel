@extends('layout')

@section('main-section')
<main>
    <div class="banner">
        <div class="wrapper">
            <h3>Proffessional IT exams</h3>
            <p>Enrol and get certified with top professional Bodies (TOFEL, PERSON VUE, ETS)</p>
            <a href="get-started">Get Started</a>
        </div>
    </div>

    <section class="cards-container">
        <div class="card">
            <img src="images/pearson.png" alt="">
            <h4>Pearson Exams</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. vident. Cum dolor autem laborum atque ex
                quia deserunt
            </p>
            <a href=""> Register</a>
        </div>

        <div class="card">
            <img src="images/ets.png" alt="">
            <h4>ETS exams</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos inventore ut, quaerat quia
                labore neque repellat
            </p>
            <a href=""> Register</a>
        </div>

        <div class="card">
            <img src="images/icm.png" alt="">
            <h4>ICM Exams</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos inventore ut, quaerat quia
                labore neque repellat</p>
            <a href="">Register</a>
        </div>
    </section>
</main>
@endsection