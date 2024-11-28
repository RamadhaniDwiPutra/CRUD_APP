@extends('layout')
@section('content')
<div class="card">
  <div class="card-header" style="background-color: #007bff; color: white; font-size: 1.5rem; font-weight: bold;">
    Enrollment Page
  </div>
  <div class="card-body">
   
    <div class="card" style="width: 49rem; border: none; border-radius: 10px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);">
        <div class="card-body" style="background-color: #f9f9f9; padding: 20px;">
            <h5 class="card-title" style="font-size: 1.25rem; color: #333; font-weight: bold; margin-bottom: 15px;">Enroll No: {{ $enrollments->enroll_no }}</h5>
            <p class="card-text" style="color: #555; display: flex; align-items: left; text-align: left; margin-bottom: 10px;">
                <i class="fas fa-map-marker-alt" style="color: #007bff; margin-right: 10px; font-size: 1.2rem;"></i> 
                <span>Batch: {{ $enrollments->Batch_id }}</span>
            </p>
            <p class="card-text" style="color: #555; display: flex; align-items: center;">
                <i class="fas fa-calendar-alt" style="color: #007bff; margin-right: 10px; font-size: 1.2rem;"></i> 
                <span>Student: {{ $enrollments->student_id }}</span>
            </p>
            <p class="card-text" style="color: #555; display: flex; align-items: center;">
                <i class="fas fa-calendar-alt" style="color: #007bff; margin-right: 10px; font-size: 1.2rem;"></i> 
                <span>Join Date: {{ $enrollments->join_date }}</span>
            </p>
            <p class="card-text" style="color: #555; display: flex; align-items: center;">
                <i class="fas fa-calendar-alt" style="color: #007bff; margin-right: 10px; font-size: 1.2rem;"></i> 
                <span>Fee: {{ $enrollments->fee }}</span>
            </p>
        </div>
    </div>

  </div>
</div>

@endsection