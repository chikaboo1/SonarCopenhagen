
  <form id="contestant-upload" action=''>
    <h2>Fill in the following form to enter the competition today</h2>
    <div class="input-wrapper"><p>First Name*</p> <input type='text' name ='firstname' id='test'>
   <p>Last Name*</p> <input type='text' name = 'lastname'>
    <p>Email*</p><input type='text' name = 'email'>
    <p>Artist Name*</p><input type='text' name = 'artistname'>
    <p>Track Title*</p><input type="text" name ='tracktitle'>
    <p>SoundCloud link to track*</p><input type="text" name = "soundname">
    <p>Link to website</p><input type="text" name = "sitelink">
    <p>Artist image*</p><input type="file" name = 'image'> </div>
    <div class="border"><p class=""> // Please only use .jpg, .gif, or .png files. </p>
    <p> // Don't go over 2MB per image or a monster will get you!!!</p></div>
    <div id="myDiv"></div>
    <button type = 'submit' onclick = 'add();'>Upload</button>
  </form>

