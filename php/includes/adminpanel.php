<section class="admpanel-wrapper">
    <div class="accordion-wrapper">
        <div class="accordion-item">
            <button class="accordion">Insert News Article</button>
            <div class="panel">
                <form action="php/classes/insertNews.php" method="POST" class="form" enctype="multipart/form-data">
                    <label for="title">Enter Article Title:</label>
                    <input type="text" name="title" id="title">
                    <label for="title">Write Text Of An Article:</label>
                    <textarea name="textarea" id="textarea" cols="30" rows="10"></textarea>
                    <label for="title">Upload Article Image:</label>
                    <input type="file" name="imageToUpload" id="imageToUpload"><br>
                    <input type="submit" name="submit" value="Insert">
                </form>
            </div>
        </div>
        <div class="accordion-item">
            <button class="accordion">Insert New Tournament</button>
            <div class="panel">
                <form action="php/classes/insertTournament.php" method="POST" class="form" enctype="multipart/form-data">
                    <label for="name">Enter Tournament's Name:</label>
                    <input type="text" name="name" id="name">
                    <label for="title">Upload Tournament's Image:</label>
                    <input type="file" name="imageToUpload" id="imageToUpload"><br>
                    <label for="startdate">Enter Tournament's Start Date:</label>
                    <input type="date" name="startdate" id="startdate">
                    <label for="enddate">Enter Tournament's End Date:</label>
                    <input type="date" name="enddate" id="enddate">
                    <label for="prize">Enter Tournament's Prize Pool:</label>
                    <input type="number" name="prize" id="prize">
                    <input type="submit" name="submit" value="Insert">
                </form>
            </div>
        </div>
    </div>
</section>