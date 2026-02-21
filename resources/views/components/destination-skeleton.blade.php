@props(['count' => 3])

@for($i = 0; $i < $count; $i++)
<div class="col-lg-4 col-md-6">
    <div class="card destination-card shadow-lg h-100 border-0">
        <!-- Image Skeleton -->
        <div class="skeleton skeleton-image" style="height: 220px; border-radius: var(--radius-lg) var(--radius-lg) 0 0;"></div>

        <!-- Card Body -->
        <div class="card-body p-4">
            <!-- Price Row Skeleton -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <div class="skeleton skeleton-text" style="width: 80px; height: 24px;"></div>
                    <div class="skeleton skeleton-text mt-1" style="width: 60px; height: 14px;"></div>
                </div>
                <div class="skeleton" style="width: 70px; height: 28px; border-radius: 20px;"></div>
            </div>

            <!-- Title Skeleton -->
            <div class="skeleton skeleton-title mb-3" style="width: 85%;"></div>

            <!-- Features Skeleton -->
            <div class="d-flex gap-3 mb-4">
                <div class="skeleton" style="width: 90px; height: 20px; border-radius: 10px;"></div>
                <div class="skeleton" style="width: 80px; height: 20px; border-radius: 10px;"></div>
            </div>

            <!-- Rating Skeleton -->
            <div class="d-flex align-items-center mb-3">
                <div class="skeleton" style="width: 100px; height: 16px;"></div>
                <div class="skeleton ms-2" style="width: 80px; height: 14px;"></div>
            </div>

            <!-- Button Skeleton -->
            <div class="skeleton" style="width: 100%; height: 48px; border-radius: 50px;"></div>
        </div>
    </div>
</div>
@endfor
