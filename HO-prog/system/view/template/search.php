        <h1>Kisállat keresése</h1>
           <div class="inside">
                 <h2>Keresési űrlap</h2>
               <form>
                <label for="name">Név alapján: </label><br>
                <input type="text" id="name" name="name"><br>
                <label for="species">Faj alapján: </label><br>
                <select id="species" name="species">
                    <option value="Hcs">Hörcsög</option>
                    <option value="Tm">Tengerimalac</option>
                    <option value="K">Kígyó</option>
                </select><br>
                <label for="minprice">Minimum ár: </label><br>
                <input type="number" id="minprice" name="minprice" min="0"><br>
                <label for="maxprice">Maximum ár: </label><br>
                <input type="number" id="maxprice" name="maxprice" min="0"><br>
                <input type="button" class="button" value="Keresés">
               </form>
                </div>

