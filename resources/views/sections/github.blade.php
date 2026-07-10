<section class="py-24 lg:py-32">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-2xl mx-auto mb-16" data-reveal data-reveal-dir="up">
      <p class="text-accent font-medium text-sm tracking-widest uppercase mb-4">Open Source</p>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-primary tracking-tight">
        GitHub Activity
      </h2>
    </div>

    @php
      $githubUser = 'RikzaALL';

      $cacheFile = storage_path('framework/cache/github_repos.json');
      $repos = [];
      if (file_exists($cacheFile) && time() - filemtime($cacheFile) < 3600) {
        $repos = json_decode(file_get_contents($cacheFile), true) ?? [];
      } else {
        $ctx = stream_context_create(['http' => ['method' => 'GET', 'header' => "User-Agent: Laravel\r\nAccept: application/json\r\n", 'timeout' => 5]]);
        $res = @file_get_contents("https://api.github.com/users/{$githubUser}/repos?sort=updated&per_page=6", false, $ctx);
        if ($res) {
          $repos = json_decode($res, true) ?? [];
          @file_put_contents($cacheFile, json_encode($repos));
        }
      }
    @endphp

    <div data-reveal data-reveal-dir="up" class="flex flex-col items-center">
      <div class="glass rounded-2xl p-6 lg:p-8 mb-8 w-full max-w-4xl">
        <h3 class="text-sm font-semibold text-primary mb-4">Contribution Graph ({{ date('Y') }})</h3>
        <div class="overflow-x-auto pb-2 flex justify-center">
          <img src="https://ghchart.rshah.org/{{ $githubUser }}" alt="GitHub contribution chart for {{ $githubUser }}" class="min-w-[720px] h-auto" loading="lazy">
        </div>
        <p class="text-xs text-secondary/50 mt-3 text-center">
          <a href="https://github.com/{{ $githubUser }}" target="_blank" rel="noopener noreferrer" class="hover:text-accent transition-colors">View full profile &rarr;</a>
        </p>
      </div>

      @if (count($repos) > 0)
        <div class="grid md:grid-cols-2 gap-4 w-full max-w-4xl">
          @foreach ($repos as $repo)
            <a href="{{ $repo['html_url'] }}" target="_blank" rel="noopener noreferrer" class="glass rounded-2xl p-5 flex items-center gap-4 hover:bg-white/[0.04] transition-colors group">
              <div class="w-10 h-10 rounded-lg bg-accent/10 flex items-center justify-center shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="text-accent"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
              </div>
              <div class="min-w-0 flex-1">
                <h4 class="text-sm font-semibold text-primary group-hover:text-accent transition-colors truncate">{{ $repo['name'] }}</h4>
                <p class="text-xs text-secondary/60 truncate">{{ $repo['description'] ?? 'No description' }}</p>
                @if ($repo['language'] || ($repo['stargazers_count'] ?? 0) > 0)
                  <div class="flex items-center gap-3 mt-1.5">
                    @if ($repo['language'])
                      <span class="text-[10px] text-secondary/40">{{ $repo['language'] }}</span>
                    @endif
                    @if (($repo['stargazers_count'] ?? 0) > 0)
                      <span class="text-[10px] text-secondary/40">&#9733; {{ $repo['stargazers_count'] }}</span>
                    @endif
                  </div>
                @endif
              </div>
            </a>
          @endforeach
        </div>
      @else
        <div class="glass rounded-2xl p-5 text-center">
          <p class="text-sm text-secondary/60">Unable to load repositories. <a href="https://github.com/{{ $githubUser }}" target="_blank" rel="noopener noreferrer" class="text-accent hover:underline">View on GitHub</a></p>
        </div>
      @endif
    </div>
  </div>
</section>
