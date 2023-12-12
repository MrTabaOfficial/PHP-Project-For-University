@extends('layoutdsh.app')
  
@section('title', 'Show Contacts')
  
@section('contents')
    <h1 class="mb-0">Detail of Contacts</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $contact->name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $contact->email }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Phone Number</label>
            <input type="text" name="phonenumber" class="form-control" placeholder="Phone Number" value="{{ $contact->phonenumber }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Message</label>
            <textarea class="form-control" name="message" placeholder="message" readonly>{{ $contact->message }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $contact->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $contact->updated_at }}" readonly>
        </div>
    </div>
@endsection