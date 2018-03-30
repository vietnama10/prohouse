<div class="contact-form">
    <form id="contact_form" class="form_SendContact" method="POST" action="{{URL::to('/')}}/send_contact" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" required aria-describedby="emailHelp" placeholder="Your email">
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="name" class="form-control" id="name" name="name" required aria-describedby="textHelp" placeholder="Your name">
        </div>
        <div class="form-group">
            <label for="phone">Phone number</label>
            <input type="number" class="form-control" id="phone" name="phone" aria-describedby="textHelp" placeholder="Your phone">
        </div>
        <div class="form-group">
            <label for="phone">Message</label>
            <textarea rows="5" class="form-control" id="massage" name="message" required aria-describedby="textHelp" minlength="50"  placeholder="Your messgage"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@section('javascript')
<script src="public/js/contact-form.js"></script>
@endsection