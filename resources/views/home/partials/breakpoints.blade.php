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
        <div class="Card Hero is-visible-mobile">
            <div class="Hero__body">
                <p>Mobile</p>
                <p><code>.is-visible-mobile</code></p>
            </div>
        </div>
        <div class="Card Hero is-hidden-mobile">
            <div class="Hero__body">
                <p>Mobile Hidden</p>
                <p><code>.is-hidden-mobile</code></p>
            </div>
        </div>
        <div class="Card Hero is-visible-mobile-only">
            <div class="Hero__body">
                <p>Mobile visible only</p>
                <p><code>.is-visible-mobile-only</code></p>
            </div>
        </div>
        <div class="Card Hero is-hidden-mobile-only">
            <div class="Hero__body">
                <p>Mobile hidden only</p>
                <p><code>.is-hidden-mobile-only</code></p>
            </div>
        </div>
    </div>
    {{-- Tablet --}}
    <div class="Grid is-spaced has-4-columns Visibility">
        <div class="Card Hero is-visible-tablet">
            <div class="Hero__body">
                <p>tablet</p>
                <p><code>.is-visible-tablet</code></p>
            </div>
        </div>
        <div class="Card Hero is-hidden-tablet">
            <div class="Hero__body">
                <p>tablet Hidden</p>
                <p><code>.is-hidden-tablet</code></p>
            </div>
        </div>
        <div class="Card Hero is-visible-tablet-only">
            <div class="Hero__body">
                <p>tablet visible only</p>
                <p><code>.is-visible-tablet-only</code></p>
            </div>
        </div>
        <div class="Card Hero is-hidden-tablet-only">
            <div class="Hero__body">
                <p>tablet hidden only</p>
                <p><code>.is-hidden-tablet-only</code></p>
            </div>
        </div>
    </div>
    {{-- Tablet Portrait--}}
    <div class="Grid is-spaced has-4-columns Visibility">
        <div class="Card Hero is-visible-tablet-portrait">
            <div class="Hero__body">
                <p>tablet-portrait</p>
                <p><code>.is-visible-tablet-portrait</code></p>
            </div>
        </div>
        <div class="Card Hero is-hidden-tablet-portrait">
            <div class="Hero__body">
                <p>tablet-portrait Hidden</p>
                <p><code>.is-hidden-tablet-portrait</code></p>
            </div>
        </div>
        <div class="Card Hero is-visible-tablet-portrait-only">
            <div class="Hero__body">
                <p>tablet-portrait visible only</p>
                <p><code>.is-visible-tablet-portrait-only</code></p>
            </div>
        </div>
        <div class="Card Hero is-hidden-tablet-portrait-only">
            <div class="Hero__body">
                <p>tablet-portrait hidden only</p>
                <p><code>.is-hidden-tablet-portrait-only</code></p>
            </div>
        </div>
    </div>
    {{-- Desktop --}}
    <div class="Grid is-spaced has-4-columns Visibility">
        <div class="Card Hero is-visible-desktop">
            <div class="Hero__body">
                <p>desktop</p>
                <p><code>.is-visible-desktop</code></p>
            </div>
        </div>
        <div class="Card Hero is-hidden-desktop">
            <div class="Hero__body">
                <p>desktop Hidden</p>
                <p><code>.is-hidden-desktop</code></p>
            </div>
        </div>
        <div class="Card Hero is-visible-desktop-only">
            <div class="Hero__body">
                <p>desktop visible only</p>
                <p><code>.is-visible-desktop-only</code></p>
            </div>
        </div>
        <div class="Card Hero is-hidden-desktop-only">
            <div class="Hero__body">
                <p>desktop hidden only</p>
                <p><code>.is-hidden-desktop-only</code></p>
            </div>
        </div>
    </div>
    {{-- Desktop HD --}}
    <div class="Grid is-spaced has-4-columns Visibility">
        <div class="Card Hero is-visible-desktop-hd">
            <div class="Hero__body">
                <p>desktop-hd</p>
                <p><code>.is-visible-desktop-hd</code></p>
            </div>
        </div>
        <div class="Card Hero is-hidden-desktop-hd">
            <div class="Hero__body">
                <p>desktop-hd Hidden</p>
                <p><code>.is-hidden-desktop-hd</code></p>
            </div>
        </div>
        <div class="Card Hero is-visible-desktop-hd-only">
            <div class="Hero__body">
                <p>desktop-hd visible only</p>
                <p><code>.is-visible-desktop-hd-only</code></p>
            </div>
        </div>
        <div class="Card Hero is-hidden-desktop-hd-only">
            <div class="Hero__body">
                <p>desktop-hd hidden only</p>
                <p><code>.is-hidden-desktop-hd-only</code></p>
            </div>
        </div>
    </div>
</div>
