jra_ext_link
============

Fork of jra_ext_link TXP plugin by © Jean Rajotte

New attribute added "all" (boolean): sets to 1 rewrite all links without the need to add a class name. New all links contains a rel="nofollow" and a target="_blank" *excepted* links for the current website.

# Example 1 (Simple) with default class attribute:

    <txp:jra_ext_link>
    ...
    This would be an "(_)external link":http://www.elsewhere.com.
    ...
    </txp:jra_ext_link>

## yields:

    This would be an <a href="http://www.elsewhere.com" target="_blank" class="_">external link</a>.

Note how the class tag remains in the output HTML.

# Example 2 (custom class):

    <txp:jra_ext_link class="bob">
    ...
    This would be an "(bob)external link":http://www.elsewhere.com.
    ...
    </txp:jra_ext_link>

## yields:

    This would be an <a href="http://www.elsewhere.com" target="_blank" class="bob">external link</a>.

# Example 3 (Simple) with use of all attribute:

    <txp:jra_ext_link all="1">
    ...
    This would be an "external link":http://www.elsewhere.com.
    ...
    </txp:jra_ext_link>

## yields:

    This would be an <a href="http://www.elsewhere.com" rel="nofollow" target="_blank">external link</a> and <a href="http://my-domain.com" title="Go to this page" class="my-class">internal links stay unchanged</a>.</p>
