@extends('layouts.boot')
@section('content')

        <!-- DataTables Example -->
        <div class="card mb-4">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                  <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Amount ( MYR / RM )</th>
                    <th>Time Created</th>
                    <th>Last Updated</th>
                    <th>Description</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                     <th>Name</th>
                    <th>Type</th>
                    <th>Amount ( MYR / RM )</th>
                    <th>Time Created</th>
                    <th>Last Updated</th>
                    <th>Description</th>
                  </tr>
                </tfoot>
                <tbody>
             
        @foreach($user->transactions as $transactions)      
                    @if($transactions->category == "Expenses")
                    <tr bgcolor="#5933cc">
                    @else
                    <tr bgcolor="#cc2280">
                    @endif

                    <td>{{ $transactions->Name }}</td>
                    <td>{{ $transactions->category }}</td>
                    <td align="right">{{ $transactions->amount }}</td>
                    <td>{{ $transactions->created_at }}</td>
                    <td>{{ $transactions->updated_at }}</td>
                    <td>{{ $transactions->Desc }}</td>
                    </tr>

        @endforeach
        
        
        
                </tbody>
              </table>
            </div>
          </div>
            </div>
        
@endsection