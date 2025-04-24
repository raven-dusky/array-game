<x-layout>
    <div class="leaderboard-container">
        <h1>Leaderboard</h1>
        <p>Top 25 users with the highest scores.</p>
        <table class="leaderboard-table">
            <thead class="leaderboard-header">
                <tr class="leaderboard-row">
                    <th class="leaderboard-item">Rank</th>
                    <th class="leaderboard-item">Name</th>
                    <th class="leaderboard-item">Score</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($scores as $score)
                    <tr>
                        <td>#{{ $loop->iteration }}</td>
                        <td>{{ $score->user->name }}</td>
                        <td>{{ $score->total }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No users found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    <div>
</x-layout>
