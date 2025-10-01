<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: DOMNode::hasChildNodes - Manual</title>

      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">
  
 <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
 <link rel="icon" type="image/png" sizes="196x196" href="https://www.php.net/favicon-196x196.png?v=2">
 <link rel="icon" type="image/png" sizes="32x32" href="https://www.php.net/favicon-32x32.png?v=2">
 <link rel="icon" type="image/png" sizes="16x16" href="https://www.php.net/favicon-16x16.png?v=2">
 <link rel="shortcut icon" href="https://www.php.net/favicon.ico?v=2">

 <link rel="search" type="application/opensearchdescription+xml" href="https://www.php.net/phpnetimprovedsearch.src" title="Add PHP.net search">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/releases/feed.php" title="PHP Release feed">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/feed.atom" title="PHP: Hypertext Preprocessor">

 <link rel="canonical" href="https://www.php.net/manual/en/domnode.haschildnodes.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/domnode.haschildnodes.php">
 <link rel="alternate" href="https://www.php.net/manual/en/domnode.haschildnodes.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.domnode.php">
 <link rel="prev" href="https://www.php.net/manual/en/domnode.hasattributes.php">
 <link rel="next" href="https://www.php.net/manual/en/domnode.insertbefore.php">

 <link rel="alternate" href="https://www.php.net/manual/en/domnode.haschildnodes.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/domnode.haschildnodes.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/domnode.haschildnodes.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/domnode.haschildnodes.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/domnode.haschildnodes.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/domnode.haschildnodes.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/domnode.haschildnodes.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/domnode.haschildnodes.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/domnode.haschildnodes.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/domnode.haschildnodes.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/domnode.haschildnodes.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Checks if node has children" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: DOMNode::hasChildNodes - Manual" />
<meta name="twitter:description" content="Checks if node has children" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: DOMNode::hasChildNodes - Manual" />
<meta itemprop="description" content="Checks if node has children" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Checks if node has children" />

<link href="https://fosstodon.org/@php" rel="me" />
<!-- Matomo -->
<script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(["setDoNotTrack", true]);
    _paq.push(["disableCookies"]);
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u="https://analytics.php.net/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
</script>
<!-- End Matomo Code -->
</head>
<body class="docs ">

<nav class="navbar navbar-fixed-top">
  <div class="navbar__inner">
    <a href="/" aria-label="PHP Home" class="navbar__brand">
      <img
        src="/images/logos/php-logo-white.svg"
        aria-hidden="true"
        width="80"
        height="40"
      >
    </a>

    <div
      id="navbar__offcanvas"
      tabindex="-1"
      class="navbar__offcanvas"
      aria-label="Menu"
    >
      <button
        id="navbar__close-button"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar__close-button"
      >
        <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" fill="currentColor"><path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" /></svg>
      </button>

      <ul class="navbar__nav">
                            <li class="navbar__item">
              <a
                href="/downloads.php"
                                class="navbar__link  "
              >
                                  Downloads                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/docs.php"
                aria-current="page"                class="navbar__link navbar__link--active "
              >
                                  Documentation                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/get-involved.php"
                                class="navbar__link  "
              >
                                  Get Involved                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/support.php"
                                class="navbar__link  "
              >
                                  Help                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/releases/8.4/index.php"
                                class="navbar__link  navbar__release"
              >
                                  <img src="/images/php8/logo_php8_4.svg" alt="PHP 8.4">
                              </a>
          </li>
              </ul>
    </div>

    <div class="navbar__right">
      
      <!-- Desktop default search -->
      <form
        action="/manual-lookup.php"
        class="navbar__search-form"
      >
        <label for="navbar__search-input" aria-label="Search docs">
          <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        </label>
        <input
          type="search"
          name="pattern"
          id="navbar__search-input"
          class="navbar__search-input"
          placeholder="Search docs"
          accesskey="s"
        >
        <input type="hidden" name="scope" value="quickref">
      </form>

      <!-- Desktop encanced search -->
      <button
        id="navbar__search-button"
        class="navbar__search-button"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        Search docs
      </button>

      <!-- Mobile default items -->
      <a
        id="navbar__search-link"
        href="/lookup-form.php"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-link"
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </a>
      <a
        id="navbar__menu-link"
        href="/menu.php"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar_menu-link"
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </a>

      <!-- Mobile enhanced items -->
      <button
        id="navbar__search-button-mobile"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-button-mobile"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </button>
      <button
        id="navbar__menu-button"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned"
        hidden
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </button>
    </div>

    <div
      id="navbar__backdrop"
      class="navbar__backdrop"
    ></div>
  </div>

  <div id="flash-message"></div>
</nav>
<div class="headsup"><a href='/index.php#2025-09-25-3'>PHP 8.5.0 RC 1 available for testing</a></div>
<nav id="trick"><div><dl>
<dt><a href='/manual/en/getting-started.php'>Getting Started</a></dt>
	<dd><a href='/manual/en/introduction.php'>Introduction</a></dd>
	<dd><a href='/manual/en/tutorial.php'>A simple tutorial</a></dd>
<dt><a href='/manual/en/langref.php'>Language Reference</a></dt>
	<dd><a href='/manual/en/language.basic-syntax.php'>Basic syntax</a></dd>
	<dd><a href='/manual/en/language.types.php'>Types</a></dd>
	<dd><a href='/manual/en/language.variables.php'>Variables</a></dd>
	<dd><a href='/manual/en/language.constants.php'>Constants</a></dd>
	<dd><a href='/manual/en/language.expressions.php'>Expressions</a></dd>
	<dd><a href='/manual/en/language.operators.php'>Operators</a></dd>
	<dd><a href='/manual/en/language.control-structures.php'>Control Structures</a></dd>
	<dd><a href='/manual/en/language.functions.php'>Functions</a></dd>
	<dd><a href='/manual/en/language.oop5.php'>Classes and Objects</a></dd>
	<dd><a href='/manual/en/language.namespaces.php'>Namespaces</a></dd>
	<dd><a href='/manual/en/language.enumerations.php'>Enumerations</a></dd>
	<dd><a href='/manual/en/language.errors.php'>Errors</a></dd>
	<dd><a href='/manual/en/language.exceptions.php'>Exceptions</a></dd>
	<dd><a href='/manual/en/language.fibers.php'>Fibers</a></dd>
	<dd><a href='/manual/en/language.generators.php'>Generators</a></dd>
	<dd><a href='/manual/en/language.attributes.php'>Attributes</a></dd>
	<dd><a href='/manual/en/language.references.php'>References Explained</a></dd>
	<dd><a href='/manual/en/reserved.variables.php'>Predefined Variables</a></dd>
	<dd><a href='/manual/en/reserved.exceptions.php'>Predefined Exceptions</a></dd>
	<dd><a href='/manual/en/reserved.interfaces.php'>Predefined Interfaces and Classes</a></dd>
	<dd><a href='/manual/en/reserved.attributes.php'>Predefined Attributes</a></dd>
	<dd><a href='/manual/en/context.php'>Context options and parameters</a></dd>
	<dd><a href='/manual/en/wrappers.php'>Supported Protocols and Wrappers</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/security.php'>Security</a></dt>
	<dd><a href='/manual/en/security.intro.php'>Introduction</a></dd>
	<dd><a href='/manual/en/security.general.php'>General considerations</a></dd>
	<dd><a href='/manual/en/security.cgi-bin.php'>Installed as CGI binary</a></dd>
	<dd><a href='/manual/en/security.apache.php'>Installed as an Apache module</a></dd>
	<dd><a href='/manual/en/security.sessions.php'>Session Security</a></dd>
	<dd><a href='/manual/en/security.filesystem.php'>Filesystem Security</a></dd>
	<dd><a href='/manual/en/security.database.php'>Database Security</a></dd>
	<dd><a href='/manual/en/security.errors.php'>Error Reporting</a></dd>
	<dd><a href='/manual/en/security.variables.php'>User Submitted Data</a></dd>
	<dd><a href='/manual/en/security.hiding.php'>Hiding PHP</a></dd>
	<dd><a href='/manual/en/security.current.php'>Keeping Current</a></dd>
<dt><a href='/manual/en/features.php'>Features</a></dt>
	<dd><a href='/manual/en/features.http-auth.php'>HTTP authentication with PHP</a></dd>
	<dd><a href='/manual/en/features.cookies.php'>Cookies</a></dd>
	<dd><a href='/manual/en/features.sessions.php'>Sessions</a></dd>
	<dd><a href='/manual/en/features.file-upload.php'>Handling file uploads</a></dd>
	<dd><a href='/manual/en/features.remote-files.php'>Using remote files</a></dd>
	<dd><a href='/manual/en/features.connection-handling.php'>Connection handling</a></dd>
	<dd><a href='/manual/en/features.persistent-connections.php'>Persistent Database Connections</a></dd>
	<dd><a href='/manual/en/features.commandline.php'>Command line usage</a></dd>
	<dd><a href='/manual/en/features.gc.php'>Garbage Collection</a></dd>
	<dd><a href='/manual/en/features.dtrace.php'>DTrace Dynamic Tracing</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/funcref.php'>Function Reference</a></dt>
	<dd><a href='/manual/en/refs.basic.php.php'>Affecting PHP's Behaviour</a></dd>
	<dd><a href='/manual/en/refs.utilspec.audio.php'>Audio Formats Manipulation</a></dd>
	<dd><a href='/manual/en/refs.remote.auth.php'>Authentication Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.cmdline.php'>Command Line Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.compression.php'>Compression and Archive Extensions</a></dd>
	<dd><a href='/manual/en/refs.crypto.php'>Cryptography Extensions</a></dd>
	<dd><a href='/manual/en/refs.database.php'>Database Extensions</a></dd>
	<dd><a href='/manual/en/refs.calendar.php'>Date and Time Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.file.php'>File System Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.international.php'>Human Language and Character Encoding Support</a></dd>
	<dd><a href='/manual/en/refs.utilspec.image.php'>Image Processing and Generation</a></dd>
	<dd><a href='/manual/en/refs.remote.mail.php'>Mail Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.math.php'>Mathematical Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.nontext.php'>Non-Text MIME Output</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.process.php'>Process Control Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.other.php'>Other Basic Extensions</a></dd>
	<dd><a href='/manual/en/refs.remote.other.php'>Other Services</a></dd>
	<dd><a href='/manual/en/refs.search.php'>Search Engine Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.server.php'>Server Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.session.php'>Session Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.text.php'>Text Processing</a></dd>
	<dd><a href='/manual/en/refs.basic.vartype.php'>Variable and Type Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.webservice.php'>Web Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.windows.php'>Windows Only Extensions</a></dd>
	<dd><a href='/manual/en/refs.xml.php'>XML Manipulation</a></dd>
	<dd><a href='/manual/en/refs.ui.php'>GUI Extensions</a></dd>
</dl>
<dl>
<dt>Keyboard Shortcuts</dt><dt>?</dt>
<dd>This help</dd>
<dt>j</dt>
<dd>Next menu item</dd>
<dt>k</dt>
<dd>Previous menu item</dd>
<dt>g p</dt>
<dd>Previous man page</dd>
<dt>g n</dt>
<dd>Next man page</dd>
<dt>G</dt>
<dd>Scroll to bottom</dd>
<dt>g g</dt>
<dd>Scroll to top</dd>
<dt>g h</dt>
<dd>Goto homepage</dd>
<dt>g s</dt>
<dd>Goto search<br>(current page)</dd>
<dt>/</dt>
<dd>Focus search box</dd>
</dl></div></nav>
<div id="goto">
    <div class="search">
         <div class="text"></div>
         <div class="results"><ul></ul></div>
   </div>
</div>

  <div id="breadcrumbs" class="clearfix">
    <div id="breadcrumbs-inner">
          <div class="next">
        <a href="domnode.insertbefore.php">
          DOMNode::insertBefore &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="domnode.hasattributes.php">
          &laquo; DOMNode::hasAttributes        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.xml.php'>XML Manipulation</a></li>      <li><a href='book.dom.php'>DOM</a></li>      <li><a href='class.domnode.php'>DOMNode</a></li>      </ul>
    </div>
  </div>




<div id="layout" class="clearfix">
  <section id="layout-content">
  <div class="page-tools">
    <div class="change-language">
      <form action="/manual/change.php" method="get" id="changelang" name="changelang">
        <fieldset>
          <label for="changelang-langs">Change language:</label>
          <select onchange="document.changelang.submit()" name="page" id="changelang-langs">
            <option value='en/domnode.haschildnodes.php' selected="selected">English</option>
            <option value='de/domnode.haschildnodes.php'>German</option>
            <option value='es/domnode.haschildnodes.php'>Spanish</option>
            <option value='fr/domnode.haschildnodes.php'>French</option>
            <option value='it/domnode.haschildnodes.php'>Italian</option>
            <option value='ja/domnode.haschildnodes.php'>Japanese</option>
            <option value='pt_BR/domnode.haschildnodes.php'>Brazilian Portuguese</option>
            <option value='ru/domnode.haschildnodes.php'>Russian</option>
            <option value='tr/domnode.haschildnodes.php'>Turkish</option>
            <option value='uk/domnode.haschildnodes.php'>Ukrainian</option>
            <option value='zh/domnode.haschildnodes.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="domnode.haschildnodes" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">DOMNode::hasChildNodes</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">DOMNode::hasChildNodes</span> &mdash; <span class="dc-title">
   Checks if node has children
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-domnode.haschildnodes-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>DOMNode::hasChildNodes</strong></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   This function checks if the node has children.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-domnode.haschildnodes-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-domnode.haschildnodes-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-domnode.haschildnodes-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="domnode.hasattributes.php" class="methodname" rel="rdfs-seeAlso">DOMNode::hasAttributes()</a> - Checks if node has attributes</span></li>
   </ul>
  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/dom/domnode/haschildnodes.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fdomnode.haschildnodes%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=domnode.haschildnodes&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domnode.haschildnodes.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="100424">  <div class="votes">
    <div id="Vu100424">
    <a href="/manual/vote-note.php?id=100424&amp;page=domnode.haschildnodes&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100424">
    <a href="/manual/vote-note.php?id=100424&amp;page=domnode.haschildnodes&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100424" title="80% like this...">
    6
    </div>
  </div>
  <a href="#100424" class="name">
  <strong class="user"><em>sansana</em></strong></a><a class="genanchor" href="#100424"> &para;</a><div class="date" title="2010-10-14 07:04"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100424">
<div class="phpcode"><code><span class="html">Personally I think using a simple:[code]if($DOMNode-&gt;childNodes &lt;&gt;0){}[/code] works better.</span></code></div>
  </div>
 </div>
  <div class="note" id="95459">  <div class="votes">
    <div id="Vu95459">
    <a href="/manual/vote-note.php?id=95459&amp;page=domnode.haschildnodes&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95459">
    <a href="/manual/vote-note.php?id=95459&amp;page=domnode.haschildnodes&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95459" title="68% like this...">
    6
    </div>
  </div>
  <a href="#95459" class="name">
  <strong class="user"><em>syngcw at syncgw.com</em></strong></a><a class="genanchor" href="#95459"> &para;</a><div class="date" title="2010-01-04 05:53"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95459">
<div class="phpcode"><code><span class="html">This function is a bit tricky. If you want to find XML childnodes it is useless. You need to create a work-around:<br /><br /><span class="default">&lt;?php<br /><br />$x </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();<br /></span><span class="default">$x</span><span class="keyword">-&gt;</span><span class="default">loadXML</span><span class="keyword">(</span><span class="string">'<br />&lt;A&gt;<br /> &lt;B&gt;b-text&lt;/B&gt;<br /> &lt;C&gt;<br />  &lt;D&gt;d-text&lt;/D&gt;<br /> &lt;/C&gt;<br /> &lt;E/&gt;<br />&lt;/A&gt;'</span><span class="keyword">);<br /><br /></span><span class="default">shownode</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'A'</span><span class="keyword">)-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">));<br />function </span><span class="default">shownode</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">) {<br /> foreach (</span><span class="default">$x</span><span class="keyword">-&gt;</span><span class="default">childNodes </span><span class="keyword">as </span><span class="default">$p</span><span class="keyword">)<br />  if (</span><span class="default">hasChild</span><span class="keyword">(</span><span class="default">$p</span><span class="keyword">)) {<br />      echo </span><span class="default">$p</span><span class="keyword">-&gt;</span><span class="default">nodeName</span><span class="keyword">.</span><span class="string">' -&gt; CHILDNODES&lt;br&gt;'</span><span class="keyword">;<br />      </span><span class="default">shownode</span><span class="keyword">(</span><span class="default">$p</span><span class="keyword">);<br />  } elseif (</span><span class="default">$p</span><span class="keyword">-&gt;</span><span class="default">nodeType </span><span class="keyword">== </span><span class="default">XML_ELEMENT_NODE</span><span class="keyword">)<br />   echo </span><span class="default">$p</span><span class="keyword">-&gt;</span><span class="default">nodeName</span><span class="keyword">.</span><span class="string">' '</span><span class="keyword">.</span><span class="default">$p</span><span class="keyword">-&gt;</span><span class="default">nodeValue</span><span class="keyword">.</span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />}<br />function </span><span class="default">hasChild</span><span class="keyword">(</span><span class="default">$p</span><span class="keyword">) {<br /> if (</span><span class="default">$p</span><span class="keyword">-&gt;</span><span class="default">hasChildNodes</span><span class="keyword">()) {<br />  foreach (</span><span class="default">$p</span><span class="keyword">-&gt;</span><span class="default">childNodes </span><span class="keyword">as </span><span class="default">$c</span><span class="keyword">) {<br />   if (</span><span class="default">$c</span><span class="keyword">-&gt;</span><span class="default">nodeType </span><span class="keyword">== </span><span class="default">XML_ELEMENT_NODE</span><span class="keyword">)<br />    return </span><span class="default">true</span><span class="keyword">;<br />  }<br /> }<br /> return </span><span class="default">false</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />shows:<br />B b-text<br />C -&gt; CHILDNODES<br />D d-text<br />E</span></code></div>
  </div>
 </div>
  <div class="note" id="109563">  <div class="votes">
    <div id="Vu109563">
    <a href="/manual/vote-note.php?id=109563&amp;page=domnode.haschildnodes&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109563">
    <a href="/manual/vote-note.php?id=109563&amp;page=domnode.haschildnodes&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109563" title="75% like this...">
    4
    </div>
  </div>
  <a href="#109563" class="name">
  <strong class="user"><em>richard dot gildx at gmail dot com</em></strong></a><a class="genanchor" href="#109563"> &para;</a><div class="date" title="2012-07-29 01:20"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109563">
<div class="phpcode"><code><span class="html">This "hasChildNodes()" exercise is simple enough to make it clear and understandable. Or, you could take it as a tag empty check. By Richard Holm, Sweden.<br /><br /><span class="default">&lt;?php<br />$xmldoc</span><span class="keyword">=<br /></span><span class="string">'&lt;?xml version="1.0" ?&gt;<br />&lt;root&gt;<br />&lt;text&gt;Text&lt;/text&gt;<br />&lt;none/&gt;<br />&lt;empty&gt;&lt;/empty&gt;<br />&lt;space&gt; &lt;/space&gt;<br />&lt;/root&gt;'</span><span class="keyword">;<br /><br /></span><span class="default">$domdoc</span><span class="keyword">=new </span><span class="default">DOMDocument</span><span class="keyword">();<br /></span><span class="default">$domdoc</span><span class="keyword">-&gt;</span><span class="default">loadXML</span><span class="keyword">(</span><span class="default">$xmldoc</span><span class="keyword">);<br /><br /></span><span class="default">$tag</span><span class="keyword">=</span><span class="default">$domdoc</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'root'</span><span class="keyword">)-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$v</span><span class="keyword">=</span><span class="default">$tag</span><span class="keyword">-&gt;</span><span class="default">hasChildNodes</span><span class="keyword">()?</span><span class="string">" hasChildNodes"</span><span class="keyword">:</span><span class="string">" hasNoChildNodes"</span><span class="keyword">;<br />echo </span><span class="default">$tag</span><span class="keyword">-&gt;</span><span class="default">tagName</span><span class="keyword">.</span><span class="default">$v</span><span class="keyword">.</span><span class="string">"&lt;br/&gt;"</span><span class="keyword">;<br /><br /></span><span class="default">$tag</span><span class="keyword">=</span><span class="default">$domdoc</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'text'</span><span class="keyword">)-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$v</span><span class="keyword">=</span><span class="default">$tag</span><span class="keyword">-&gt;</span><span class="default">hasChildNodes</span><span class="keyword">()?</span><span class="string">" hasChildNodes"</span><span class="keyword">:</span><span class="string">" hasNoChildNodes"</span><span class="keyword">;<br />echo </span><span class="default">$tag</span><span class="keyword">-&gt;</span><span class="default">tagName</span><span class="keyword">.</span><span class="default">$v</span><span class="keyword">.</span><span class="string">"&lt;br/&gt;"</span><span class="keyword">;<br /><br /></span><span class="default">$tag</span><span class="keyword">=</span><span class="default">$domdoc</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'none'</span><span class="keyword">)-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$v</span><span class="keyword">=</span><span class="default">$tag</span><span class="keyword">-&gt;</span><span class="default">hasChildNodes</span><span class="keyword">()?</span><span class="string">" hasChildNodes"</span><span class="keyword">:</span><span class="string">" hasNoChildNodes"</span><span class="keyword">;<br />echo </span><span class="default">$tag</span><span class="keyword">-&gt;</span><span class="default">tagName</span><span class="keyword">.</span><span class="default">$v</span><span class="keyword">.</span><span class="string">"&lt;br/&gt;"</span><span class="keyword">;<br /><br /></span><span class="default">$tag</span><span class="keyword">=</span><span class="default">$domdoc</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'empty'</span><span class="keyword">)-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$v</span><span class="keyword">=</span><span class="default">$tag</span><span class="keyword">-&gt;</span><span class="default">hasChildNodes</span><span class="keyword">()?</span><span class="string">" hasChildNodes"</span><span class="keyword">:</span><span class="string">" hasNoChildNodes"</span><span class="keyword">;<br />echo </span><span class="default">$tag</span><span class="keyword">-&gt;</span><span class="default">tagName</span><span class="keyword">.</span><span class="default">$v</span><span class="keyword">.</span><span class="string">"&lt;br/&gt;"</span><span class="keyword">;<br /><br /></span><span class="default">$tag</span><span class="keyword">=</span><span class="default">$domdoc</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'space'</span><span class="keyword">)-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$v</span><span class="keyword">=</span><span class="default">$tag</span><span class="keyword">-&gt;</span><span class="default">hasChildNodes</span><span class="keyword">()?</span><span class="string">" hasChildNodes"</span><span class="keyword">:</span><span class="string">" hasNoChildNodes"</span><span class="keyword">;<br />echo </span><span class="default">$tag</span><span class="keyword">-&gt;</span><span class="default">tagName</span><span class="keyword">.</span><span class="default">$v</span><span class="keyword">.</span><span class="string">"&lt;br/&gt;"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Output:<br />root hasChildNodes<br />text hasChildNodes<br />none hasNoChildNodes<br />empty hasNoChildNodes<br />space hasChildNodes</span></code></div>
  </div>
 </div>
  <div class="note" id="116922">  <div class="votes">
    <div id="Vu116922">
    <a href="/manual/vote-note.php?id=116922&amp;page=domnode.haschildnodes&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116922">
    <a href="/manual/vote-note.php?id=116922&amp;page=domnode.haschildnodes&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116922" title="30% like this...">
    -4
    </div>
  </div>
  <a href="#116922" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#116922"> &para;</a><div class="date" title="2015-03-21 04:33"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116922">
<div class="phpcode"><code><span class="html">Hi what if its a dynamic file and we cannot use get elements by tag name then how do we print the contents of all level tags?</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=domnode.haschildnodes&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domnode.haschildnodes.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.domnode.php">DOMNode</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="domnode.appendchild.php" title="appendChild">appendChild</a>
                        </li>
                                                <li class="">
                            <a href="domnode.c14n.php" title="C14N">C14N</a>
                        </li>
                                                <li class="">
                            <a href="domnode.c14nfile.php" title="C14NFile">C14NFile</a>
                        </li>
                                                <li class="">
                            <a href="domnode.clonenode.php" title="cloneNode">cloneNode</a>
                        </li>
                                                <li class="">
                            <a href="domnode.comparedocumentposition.php" title="compareDocumentPosition">compareDocumentPosition</a>
                        </li>
                                                <li class="">
                            <a href="domnode.contains.php" title="contains">contains</a>
                        </li>
                                                <li class="">
                            <a href="domnode.getlineno.php" title="getLineNo">getLineNo</a>
                        </li>
                                                <li class="">
                            <a href="domnode.getnodepath.php" title="getNodePath">getNodePath</a>
                        </li>
                                                <li class="">
                            <a href="domnode.getrootnode.php" title="getRootNode">getRootNode</a>
                        </li>
                                                <li class="">
                            <a href="domnode.hasattributes.php" title="hasAttributes">hasAttributes</a>
                        </li>
                                                <li class="current">
                            <a href="domnode.haschildnodes.php" title="hasChildNodes">hasChildNodes</a>
                        </li>
                                                <li class="">
                            <a href="domnode.insertbefore.php" title="insertBefore">insertBefore</a>
                        </li>
                                                <li class="">
                            <a href="domnode.isdefaultnamespace.php" title="isDefaultNamespace">isDefaultNamespace</a>
                        </li>
                                                <li class="">
                            <a href="domnode.isequalnode.php" title="isEqualNode">isEqualNode</a>
                        </li>
                                                <li class="">
                            <a href="domnode.issamenode.php" title="isSameNode">isSameNode</a>
                        </li>
                                                <li class="">
                            <a href="domnode.issupported.php" title="isSupported">isSupported</a>
                        </li>
                                                <li class="">
                            <a href="domnode.lookupnamespaceuri.php" title="lookupNamespaceURI">lookupNamespaceURI</a>
                        </li>
                                                <li class="">
                            <a href="domnode.lookupprefix.php" title="lookupPrefix">lookupPrefix</a>
                        </li>
                                                <li class="">
                            <a href="domnode.normalize.php" title="normalize">normalize</a>
                        </li>
                                                <li class="">
                            <a href="domnode.removechild.php" title="removeChild">removeChild</a>
                        </li>
                                                <li class="">
                            <a href="domnode.replacechild.php" title="replaceChild">replaceChild</a>
                        </li>
                                                <li class="">
                            <a href="domnode.sleep.php" title="_&#8203;_&#8203;sleep">_&#8203;_&#8203;sleep</a>
                        </li>
                                                <li class="">
                            <a href="domnode.wakeup.php" title="_&#8203;_&#8203;wakeup">_&#8203;_&#8203;wakeup</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                    </ul>
    </aside>


  </div><!-- layout -->

  <footer>
    <div class="container footer-content">
      <div class="row-fluid">
      <ul class="footmenu">
        <li><a href="/manual/en/copyright.php">Copyright &copy; 2001-2025 The PHP Documentation Group</a></li>
        <li><a href="/my.php">My PHP.net</a></li>
        <li><a href="/contact.php">Contact</a></li>
        <li><a href="/sites.php">Other PHP.net sites</a></li>
        <li><a href="/privacy.php">Privacy policy</a></li>
      </ul>
      </div>
    </div>
  </footer>

    
<script src="/manual/en/js/ext/jquery-3.6.0.min.js"></script>
<script src="/manual/en/js/ext/FuzzySearch.min.js"></script>
<script src="/manual/en/js/ext/mousetrap.min.js"></script>
<script src="/manual/en/js/ext/jquery.scrollTo.min.js"></script>
<script src="/manual/en/js/search.js"></script>
<script src="/manual/en/js/common.js"></script>
<script type="module" src="/manual/en/js/interactive-examples.js"></script>

<a id="toTop" href="javascript:;"><span id="toTopHover"></span><img width="40" height="40" alt="To Top" src="/images/to-top@2x.png"></a>

<div id="search-modal__backdrop" class="search-modal__backdrop">
  <div
    role="dialog"
    aria-label="Search modal"
    id="search-modal"
    class="search-modal"
  >
    <div class="search-modal__header">
      <div class="search-modal__form">
        <div class="search-modal__input-icon">
          <!-- https://feathericons.com search -->
          <svg xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true"
            width="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
        </div>
        <input
          type="search"
          id="search-modal__input"
          class="search-modal__input"
          placeholder="Search docs"
          aria-label="Search docs"
        />
      </div>

      <button aria-label="Close" class="search-modal__close">
        <!-- https://pictogrammers.com/library/mdi/icon/close/ -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          aria-hidden="true"
          width="24"
          viewBox="0 0 24 24"
        >
          <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"/>
        </svg>
      </button>
    </div>
    <div
      role="listbox"
      aria-label="Search results"
      id="search-modal__results"
      class="search-modal__results"
    ></div>
    <div class="search-modal__helper-text">
      <div>
        <kbd>↑</kbd> and <kbd>↓</kbd> to navigate •
        <kbd>Enter</kbd> to select •
        <kbd>Esc</kbd> to close
      </div>
      <div>
        Press <kbd>Enter</kbd> without
        selection to search using Google
      </div>
    </div>
  </div>
</div>

</body>
</html>
