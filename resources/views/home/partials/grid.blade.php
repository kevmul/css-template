<div class="Content">
    <h1 class="m-t-40">Grid</h1>
    <div class="Grid m-t-20">
        @for($i=1;$i<=12;$i++)
            <div class="Card Column p-10">{{$i}}</div>
        @endfor
    </div>

    {{-- Code --}}
    <pre class="Code_Block" v-highlight>
        <code class="html" v-escape-content>
<div class="Grid">
    <div class="Column"></div>...
</div>
        </code>
    </pre>

    <h2 class="m-t-40">Grid-spaced</h2>
    <div class="Grid is-spaced m-t-20">
        @for($i=1;$i<=12;$i++)
            <div class="Card Column p-10">{{$i}}</div>
        @endfor
    </div>

    {{-- Code --}}
    <pre class="Code_Block" v-highlight>
        <code class="html" v-escape-content>
<div class="Grid is-spaced">
    <div class="Column"></div>...
</div>
        </code>
    </pre>

    <h2 class="m-t-40">Grid with widths</h2>
    <div class="Grid is-spaced m-t-20">
        @for($i=1;$i<=12;$i++)
            <?php $y = $i;?>
            <div class="Card Column is-{{$i}}-wide Background--Secondary p-10">Is {{$i}} Wide</div>
            @for(; $y<12; $y++)
                <div class="Card Column p-10">auto</div>
            @endfor
        @endfor
        <div class="Card Column is-6-wide Background--Secondary p-10">Is 6 Wide</div>
        <div class="Card Column is-6-wide Background--Secondary p-10">Is 6 Wide</div>
    </div>

    {{-- Code --}}
    <pre class="Code_Block" v-highlight>
        <code class="html" v-escape-content>
<div class="Grid">
    <div class="Column is-x-wide"></div>
</div>
        </code>
    </pre>

    <h2 class="m-t-40">Customize number of Columns in a Grid</h2>
    <div class="Grid is-spaced has-4-columns m-t-20">
        @for($i=1;$i<=4;$i++)
            <div class="Card Column p-10">{{$i}}</div>
        @endfor
        <div class="Card Column is-3-wide">Is 3 Wide</div>
    </div>

    {{-- Code --}}
    <pre class="Code_Block" v-highlight>
        <code class="html" v-escape-content>
<div class="Grid is-spaced has-x-columns">
    <div class="Column">
        [Where "x" equals 1 through 12]
    </div>...
</div>
        </code>
    </pre>
</div><!-- Content -->
