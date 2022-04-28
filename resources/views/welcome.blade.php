<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Somoskői Gábor</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">

        <!-- Script -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="{{ url('js/ajax.js') }}"></script>
        <script src="{{ url('js/script.js') }}"></script>
        <script src="{{ url('js/ingatlan.js') }}"></script>


    </head>
    <body>
        <main>
            <header>
                <h1 style="margin:0;">Ajánlataink</h1>
            </header>

            <article style="margin:10px 0 0 0;">
                <div id="ajanlatok">
                    <div id="ajanlatokFejlec">
                        <h4>Kategória</h4>
                        <h4>Leírás</h4>
                        <h4>Hírdetés dátuma</h4>
                        <h4>Tehermentes</h4>
                        <h4>Fénykép</h4>
                    </div>
                    <div id="ingatlan">
                        <p id="kategoria">Háztömb</p>
                        <p id="leiras">Sokan élnek benne</p>
                        <p id="hirdetes_datum">2022.03.14.</p>
                        <p id="tehermentes">Igen</p>
                        <p id="fenykep">#</p>
                    </div>
                </div>
            </article>
            <section>
                <form>
                    <h2 style="text-align:center;">Új hírdetés elküldése</h2>
                    <label>Ingatlan kategóriája</label><br>
                    <select name="kategoriaValaszt" id="">
                        <option value="defult">Kérem válasszon</option>
                    </select>
                    <br>
                    <label>Hírdetés dátuma</label><br>
                    <input type="date" id="" name="hirdetesDatum">
                    <br>
                    <label>Ingatlan leírás</label><br>
                    <input type="text" id="" name="leiras">
                    <br>
                    <label>Fénykép az ingatlanról</label>
                    <input type="file" id="" name="kepValaszt">
                    <br>
                    <input type="submit">
                </form>
            </section>
        </main>
    </body>
</html>
