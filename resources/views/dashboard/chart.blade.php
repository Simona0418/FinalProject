<div class="mt-4">
    <canvas id="jobListingsChart" width="300" height="100"></canvas>

    <input type="hidden" id="jobListingsData" value='@json($jobListingsData)'>
    <input type="hidden" id="monthLabels" value='@json($monthLabels)'>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
</div>
