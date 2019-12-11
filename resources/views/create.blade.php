@include('inc.header')

<divclass="container">
<divclass="row">
<divclass="col-md-6">

   <form class="form-horizontal" method="POST" action="{{  }}">
                <fieldset>
                    <legend>Laravel CRUD Application</legend>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <input type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="Description">
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
@include('inc.footer')