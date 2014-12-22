jra_ext_link
============

Fork of jra_ext_link TXP plugin by © Jean Rajotte

New attribute added "all" (boolean): sets to 1 rewrite all links without the need to add a class name. All parsed links contain rel="nofollow" and target="_blank" attributes *excepted* links for the current website.
Simplifies writing. Perfect for copy editors who remain focused on their texts without the headache.

Plugin available in two versions: **0.2.a** (with new attribute "all") _and_ **0.2.b** (with "all" & "nofollow" attributes).
These two attributes accept boolean values 1 or 0 (1 = "_yes_"; 0 = "_no_"). 

# Example 1 (Simple) with default "class" attribute:

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

# Example 3 (Simple) with use of "all" attribute:

    <txp:jra_ext_link all="1">
    ...
    This would be an "external link":http://www.elsewhere.com and "(my-class)internal links stay unchanged":http://my-domain.com.
    ...
    </txp:jra_ext_link>

## yields:

    This would be an <a href="http://www.elsewhere.com" rel="nofollow" target="_blank">external link</a> and <a href="http://my-domain.com" title="Go to this page" class="my-class">internal links stay unchanged</a>.</p>

# Example 4 (version 0.2.b) with use of "all" & "nofollow" attributes:

    <txp:jra_ext_link all="1" nofollow="0">
    ...
    This would be an "external link":http://www.elsewhere.com and "(my-class)internal links stay unchanged":http://my-domain.com.
    ...
    </txp:jra_ext_link>

## yields:

    This would be an <a href="http://www.elsewhere.com" target="_blank">external link</a> and <a href="http://my-domain.com" title="Go to this page" class="my-class">internal links stay unchanged</a>.</p>
