
    <form action="backend/action/action.php" method="POST">
        <input type="hidden" name="type" value="questionnaireForm">
        <div class="form-group">
            <div class="ptb-25">
                <label class="label1" for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control1" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="" name="title">
            </div>

        </div>
        <div class="form-group">
            <div class="ptb-25">
                <label class="label1" for="exampleInputEmail1">first name</label>
                <input type="text" class="form-control1" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="" name="first_name">
            </div>

        </div>
        <div class="form-group ptb-25">
            <label class="label1" for="exampleInputEmail1">last name</label>
            <input type="text" class="form-control1" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="" name="last_name">

        </div>
        <div class="form-group ptb-25">
            <label class="label1" for="exampleInputEmail1">Company Name</label>
            <input type="text" class="form-control1" id="exampleInputEmail1"
                aria-describedby="emailHelp" placeholder="" name="company_name" required>

        </div>
        <div class="form-group ptb-25">
            <label class="label1" for="exampleInputEmail1">email</label>
            <input type="email" class="form-control1" id="exampleInputEmail1"
                aria-describedby="emailHelp" placeholder="" name="email" required>

        </div>
        <div class="form-group ptb-25">
            <label class="label1" for="exampleInputPassword1">message</label>
            <input type="text" class="form-control1" id="exampleInputPassword1"
                placeholder="" name="message" required>
        </div>

        <button type="submit" class="btn btn-primary1">submit</button>
    </form>