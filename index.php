
<?php get_header(); ?>

<div id='mainWrapper' class='fixedBox'>
                <div id='mainLeft' class='fixedBox'>
                  <article>
                    <h2>Header H2</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur <a href="#">adipiscing</a> elit. Praesent orci est, luctus vel mollis viverra, facilisis commodo lectus. Curabitur placerat condimentum libero, ac tristique orci posuere ut. Donec venenatis, urna vitae hendrerit ultricies, elit libero pulvinar sapien, vitae fermentum nisl dolor eget sem. Aliquam mattis libero ut elit adipiscing pulvinar. In hac habitasse platea dictumst. In commodo bibendum augue eu dapibus. Sed molestie tempor vestibulum. Nullam pretium nisl nec risus gravida molestie. Praesent ultrices hendrerit risus, sit amet varius ipsum cursus at. </p>
                      <div class='divider'><h4>Een onderscheid tussen de lagen</h4></div>
                      <p>Vestibulum pretium dapibus massa, ultricies interdum tellus accumsan a. Sed ornare nulla felis. Proin dapibus ultrices nibh, a rutrum odio fringilla et. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris ultricies vestibulum ante vel consectetur. </p>
                      <p>Pellentesque congue sapien eu erat tristique fermentum. In euismod luctus rhoncus. Cras ut scelerisque sem. Donec bibendum viverra imperdiet. Phasellus diam tellus, dignissim sit amet mollis non, pellentesque vitae felis. Integer cursus massa non mauris egestas eu sodales nisi dapibus. Integer vitae nulla felis.</p> 
                      <h4>Table</h4>
                  <div id='tableWrapper'>
                    <table>
                        <thead><tr><th>Een hele mooie tafel</th></tr></thead>
                        <tbody>
                          <tr>
                            <th></th>
                            <th>Eerste</th>
                            <th>Tweede</th>
                            <th>Derde</th>
                          </tr>
                          <tr>
                            <th>Cijfers</th>
                            <td>Item 1</td>
                            <td>Item 2</td>
                            <td>Item 3</td>
                          </tr>
                          <tr>
                            <th>Hoofdletters</th>
                            <td>Item A</td>
                            <td>Item B</td>
                            <td>Item C</td>
                          </tr>
                          <tr>
                            <th>Kleine letters</th>
                            <td>Item a</td>
                            <td>Item b</td>
                            <td>Item c</td>
                          </tr>
                        </tbody>
                      </table>
                    </div><!--  end tableWrapper  -->
                    <h4>Form</h4>
                  <div id='formTest'>
                    <form>
                      <fieldset>
                        <label for='voorNaam'>Voornaam:</label> 
                        <input type='text' name='voorNaam'><br>
                        <label for="achterNaam">Achternaam:</label> 
                        <input type='text' name='achterNaam'><br>
                        <label for="bericht">Bericht:</label> 
                        <textarea rows="4" cols="34" name='bericht'></textarea><br>
                        <input type="submit" value="Verzend">
                        <input type="reset" name="Herstel">
                      </fieldset>
                    </form>
                  </div><!--  end formTest  -->
                </div><!--  end mainLeft  -->

                <?php get_sidebar(); ?>

            </div><!--  end mainWrapper -->
          </div><!--  end main  -->
          </div><!--  end container  -->

<?php get_footer(); ?>