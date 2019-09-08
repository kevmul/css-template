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

    <h2 class="m-t-40">Grid.is-spaced</h2>
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
    <h4>Grid.has-4-columns.is-spaced</h4>
    <div class="Grid has-4-columns is-spaced m-t-20">
        @for($i=1;$i<=4;$i++)
            <div class="Card Column p-10">{{$i}}</div>
        @endfor
        <div class="Card Column is-3-wide p-10">Is 3 Wide</div>
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

    <h2 class="m-t-40">Responsive Columns in a Grid</h2>
    <div class="Grid is-spaced">
        <div class="Card Column is-3-wide md:is-9-wide lg:is-6-wide xl:is-2-wide p-10">
            Responsive <br>
            <code>
                is-3-wide
                md:is-9-wide
                lg:is-6-wide
                xl:is-2-wide
            </code>
        </div>
    </div>
    <div class="Grid is-spaced m-t-20">
        <div class="Card Column is-6-wide md:is-4-wide sm:is-offset-2 md:is-offset-4 lg:is-offset-6 xl:is-offset-8 p-10">
            Responsive <br>
            <code>
                is-3-wide
                is-w-wide.sm:is-offset-2.md:is-offset-4.lg:is-offset-6.xl:is-offset-8
            </code>
        </div>
    </div>

</div><!-- Content -->

