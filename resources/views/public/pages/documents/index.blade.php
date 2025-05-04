@extends('layouts.public')
@section('content')

<div class="container-fluid py-2" style="background-color: #f9f5eb;">
  <div class="row">
    <div class="col-12">
      <div class="card my-4" style="border-radius: 15px; box-shadow: 0 8px 16px rgba(0,0,0,0.1); border: none;">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div style="background: linear-gradient(to right, #d4b773, #d4b773); border-radius: 15px; padding: 20px;">
            <h1 style="
        color: white;
        text-transform: capitalize;
        padding-left: 20px;
        font-weight: bold;
        font-size: 32px;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.4);
        ">
              Documents
            </h1>
          </div>
        </div>
        <div class="card-body px-3 pb-2" style="background-color: #fcf9f3;">
          <a href="{{ route('docs.create') }}" class="btn" style="background-color: #73684d; color: white; font-weight: 600; border-radius: 5px; padding: 10px 25px;">Upload Document</a>
          <div class="table-responsive p-0 mt-4">
            <table class="table text-center mb-0">
              <thead>
                <tr style="background-color: #f5eee0;">
                  <th class="text-uppercase font-weight-bolder" style="color: #6d5b33; font-size: 0.7rem;">Document Type</th>
                  <th class="text-uppercase font-weight-bolder" style="color: #6d5b33; font-size: 0.7rem;">Title</th>
                  <th class="text-uppercase font-weight-bolder" style="color: #6d5b33; font-size: 0.7rem;">Expiry Date</th>
                  <th class="text-uppercase font-weight-bolder" style="color: #6d5b33; font-size: 0.7rem;">Additional Info</th>
                  <th class="text-center text-uppercase font-weight-bolder" style="color: #6d5b33; font-size: 0.7rem;">Status</th>
                  <th class="text-center text-uppercase font-weight-bolder" style="color: #6d5b33; font-size: 0.7rem;">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($documents as $document)
                <tr style="border-bottom: 1px solid #e6d7bf;">
                  <td style="padding: 12px;">{{ $document->document_type->name }}</td>
                  <td style="padding: 12px;">{{ $document->title }}</td>
                  <td style="padding: 12px;">{{ $document->expiry_date ? $document->expiry_date->format('d/m/Y') : 'No Expiry Date' }}</td>
                  <td style="padding: 12px;">{{ $document->notes ? $document->notes : 'No Additional Info Entered' }}</td>
                  <td class="text-center" style="padding: 12px;">
                    @if($document->status == 'approved')
                    <span class="badge" style="background-color: #8db600; color: white; padding: 5px 10px; border-radius: 4px;">Approved</span>
                    @elseif($document->status == 'pending')
                    <span class="badge" style="background-color: #f8b400; color: white; padding: 5px 10px; border-radius: 4px;">Pending</span>
                    @elseif($document->status == 'rejected')
                    <span class="badge" style="background-color: #e67e22; color: white; padding: 5px 10px; border-radius: 4px;">Rejected</span>
                    @else
                    <span class="badge" style="background-color: #b8935f; color: white; padding: 5px 10px; border-radius: 4px;">{{ ucfirst($document->status) }}</span>
                    @endif
                  </td>
                  <td style="padding: 12px;">
                    <div class="btn-group" role="group">
                      <a href="{{ route('docs.show', $document->id) }}" class="btn btn-sm" style="background-color: #8db600; color: white; margin-right: 5px;">View</a>
                      @if($document->status == 'pending')
                      <a href="{{ route('docs.edit', $document->id) }}" class="btn btn-sm" style="background-color: #f8b400; color: white;">Edit</a>
                      @endif
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection