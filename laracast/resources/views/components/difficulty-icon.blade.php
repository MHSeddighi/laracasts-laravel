<div class="d-flex justify-content-center gap-1">
    @if($direction=="horizontal")
        <span class="d-inline-block w-2 h-1 rounded bg-white"></span>
        <span class="d-inline-block w-2 h-1 rounded {{ strcasecmp($level,"beginner")!=0 ? "bg-white":"bg-secondary opacity-50" }}"></span>
        <span class="d-inline-block w-2 h-1 rounded {{ ((strcasecmp($level,"beginner")!=0) and (strcasecmp($level,"intermediate")!=0)) ? "bg-white":"bg-secondary opacity-50" }}"></span>
    @else
        <span class="d-inline-block w-1 h-2 rounded bg-white"></span>
        <span class="d-inline-block w-1 h-2 rounded {{ strcasecmp($level,"beginner")!=0 ? "bg-white":"bg-secondary opacity-50" }}"></span>
        <span class="d-inline-block w-1 h-2 rounded {{ ((strcasecmp($level,"beginner")!=0) and (strcasecmp($level,"intermediate")!=0)) ? "bg-white":"bg-secondary opacity-50" }}"></span>
    @endif
</div>