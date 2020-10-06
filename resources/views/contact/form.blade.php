<div class="form-group">
    <label for="name">Name</label>
    <input name="name" value="{{ old('name') ?? $contact->name }}" type="text" class="form-control" id="name" aria-describedby="nameHelp">
    <small id="nameHelp" class="form-text text-muted">Please enter your name.</small>
    @error('name')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="email">Email address</label>
    <input name="email" value="{{ old('email') ?? $contact->email }}" type="email" class="form-control" id="email" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    @error('email')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="message">Message</label>
    <textarea name="message" type="text" class="form-control" id="message" aria-describedby="messageHelp">{{ old('message') ?? $contact->message }}</textarea>
    <small id="messageHelp" class="form-text text-muted">Please enter your Message.</small>
    @error('message')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

@csrf
