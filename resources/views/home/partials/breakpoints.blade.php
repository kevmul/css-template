<div class="Content">
    <div class="Content">
        <h1 class="Content__title">Breakpoints</h1>
    </div>
    <table class="Table" style="width: 100%">
        <thead>
            <tr>
                <td style="width: 20%">Mobile <br><p><code>0px</code></p></td>
                <td style="width: 20%">Tablet <br><p><code>600px</code></p></td>
                <td style="width: 20%">Tablet-Portrait <br><p><code>990px</code></p></td>
                <td style="width: 20%">Desktop <br><p><code>1300px</code></p></td>
                <td style="width: 20%">Desktop HD <br><p><code>1800px</code></p></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="5">
                    <div class="Hero Background--Success">
                        <p class="Hero__body">Mobile</p>
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="4">
                    <div class="Hero Background--Success">
                        <p class="Hero__body">Tablet</p>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td colspan="3">
                    <div class="Hero Background--Success">
                        <p class="Hero__body">Tablet Portrait</p>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td colspan="2">
                    <div class="Hero Background--Success">
                        <p class="Hero__body">Desktop</p>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="4"></td>
                <td>
                    <div class="Hero Background--Success">
                        <p class="Hero__body">Desktop HD</p>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    <h2>Visibility</h2>
    <h4>( resize screen to see what breakpoints get hidden )</h4>
    {{-- Mobile --}}
    <div class="Grid is-spaced has-4-columns Visibility">
        <div class="Card Hero xs:is-visible">
            <div class="Hero__body">
                <p>Mobile</p>
                <p><code>.xs:is-visible</code></p>
            </div>
        </div>
        <div class="Card Hero xs:is-hidden">
            <div class="Hero__body">
                <p>Mobile Hidden</p>
                <p><code>.xs:is-hidden</code></p>
            </div>
        </div>
        <div class="Card Hero xs:is-visible-only">
            <div class="Hero__body">
                <p>Mobile visible only</p>
                <p><code>.xs:is-visible-only</code></p>
            </div>
        </div>
        <div class="Card Hero xs:is-hidden-only">
            <div class="Hero__body">
                <p>Mobile hidden only</p>
                <p><code>.xs:is-hidden-only</code></p>
            </div>
        </div>
    </div>
    {{-- Tablet --}}
    <div class="Grid is-spaced has-4-columns Visibility">
        <div class="Card Hero sm:is-visible">
            <div class="Hero__body">
                <p>tablet</p>
                <p><code>.sm:is-visible</code></p>
            </div>
        </div>
        <div class="Card Hero sm:is-hidden">
            <div class="Hero__body">
                <p>tablet Hidden</p>
                <p><code>.sm:is-hidden</code></p>
            </div>
        </div>
        <div class="Card Hero sm:is-visible-only">
            <div class="Hero__body">
                <p>tablet visible only</p>
                <p><code>.sm:is-visible-only</code></p>
            </div>
        </div>
        <div class="Card Hero sm:is-hidden-only">
            <div class="Hero__body">
                <p>tablet hidden only</p>
                <p><code>.sm:is-hidden-only</code></p>
            </div>
        </div>
    </div>
    {{-- Tablet Portrait--}}
    <div class="Grid is-spaced has-4-columns Visibility">
        <div class="Card Hero md:is-visible">
            <div class="Hero__body">
                <p>tablet-portrait</p>
                <p><code>.md:is-visible</code></p>
            </div>
        </div>
        <div class="Card Hero md:is-hidden">
            <div class="Hero__body">
                <p>tablet-portrait Hidden</p>
                <p><code>.md:is-hidden</code></p>
            </div>
        </div>
        <div class="Card Hero md:is-visible-only">
            <div class="Hero__body">
                <p>tablet-portrait visible only</p>
                <p><code>.md:is-visible-only</code></p>
            </div>
        </div>
        <div class="Card Hero md:is-hidden-only">
            <div class="Hero__body">
                <p>tablet-portrait hidden only</p>
                <p><code>.md:is-hidden-only</code></p>
            </div>
        </div>
    </div>
    {{-- Desktop --}}
    <div class="Grid is-spaced has-4-columns Visibility">
        <div class="Card Hero lg:is-visible">
            <div class="Hero__body">
                <p>desktop</p>
                <p><code>.lg:is-visible</code></p>
            </div>
        </div>
        <div class="Card Hero lg:is-hidden">
            <div class="Hero__body">
                <p>desktop Hidden</p>
                <p><code>.lg:is-hidden</code></p>
            </div>
        </div>
        <div class="Card Hero lg:is-visible-only">
            <div class="Hero__body">
                <p>desktop visible only</p>
                <p><code>.lg:is-visible-only</code></p>
            </div>
        </div>
        <div class="Card Hero lg:is-hidden-only">
            <div class="Hero__body">
                <p>desktop hidden only</p>
                <p><code>.lg:is-hidden-only</code></p>
            </div>
        </div>
    </div>
    {{-- Desktop HD --}}
    <div class="Grid is-spaced has-4-columns Visibility">
        <div class="Card Hero xl:is-visible">
            <div class="Hero__body">
                <p>desktop-hd</p>
                <p><code>.xl:is-visible</code></p>
            </div>
        </div>
        <div class="Card Hero sm:is-visible xl:is-hidden">
            <div class="Hero__body">
                <p>desktop-hd Hidden</p>
                <p><code>.xl:is-hidden</code></p>
            </div>
        </div>
        <div class="Card Hero xl:is-visible-only">
            <div class="Hero__body">
                <p>desktop-hd visible only</p>
                <p><code>.xl:is-visible-only</code></p>
            </div>
        </div>
        <div class="Card Hero xl:is-hidden-only">
            <div class="Hero__body">
                <p>desktop-hd hidden only</p>
                <p><code>.xl:is-hidden-only</code></p>
            </div>
        </div>
    </div>
</div>
