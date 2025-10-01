<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: if - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/control-structures.if.php">
 <link rel="shorturl" href="https://www.php.net/if">
 <link rel="alternate" href="https://www.php.net/if" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.control-structures.php">
 <link rel="prev" href="https://www.php.net/manual/en/control-structures.intro.php">
 <link rel="next" href="https://www.php.net/manual/en/control-structures.else.php">

 <link rel="alternate" href="https://www.php.net/manual/en/control-structures.if.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/control-structures.if.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/control-structures.if.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/control-structures.if.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/control-structures.if.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/control-structures.if.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/control-structures.if.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/control-structures.if.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/control-structures.if.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/control-structures.if.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/control-structures.if.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="if" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: if - Manual" />
<meta name="twitter:description" content="if" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: if - Manual" />
<meta itemprop="description" content="if" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="if" />

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
        <a href="control-structures.else.php">
          else &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="control-structures.intro.php">
          &laquo; Introduction        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.control-structures.php'>Control Structures</a></li>      </ul>
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
            <option value='en/control-structures.if.php' selected="selected">English</option>
            <option value='de/control-structures.if.php'>German</option>
            <option value='es/control-structures.if.php'>Spanish</option>
            <option value='fr/control-structures.if.php'>French</option>
            <option value='it/control-structures.if.php'>Italian</option>
            <option value='ja/control-structures.if.php'>Japanese</option>
            <option value='pt_BR/control-structures.if.php'>Brazilian Portuguese</option>
            <option value='ru/control-structures.if.php'>Russian</option>
            <option value='tr/control-structures.if.php'>Turkish</option>
            <option value='uk/control-structures.if.php'>Ukrainian</option>
            <option value='zh/control-structures.if.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="control-structures.if" class="sect1">
 <h2 class="title">if</h2>
 <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p>
 <p class="para">
  The <code class="literal">if</code> construct is one of the most important
  features of many languages, PHP included.  It allows for
  conditional execution of code fragments.  PHP features an
  <code class="literal">if</code> structure that is similar to that of C:
  <div class="informalexample">
   <div class="example-contents">
<div class="cdata"><pre>
if (expr)
  statement
</pre></div>
   </div>

  </div>
 </p>
 <p class="simpara">
  As described in <a href="language.expressions.php" class="link">the section about
  expressions</a>, <span class="replaceable">expression</span> is evaluated to its
  Boolean value.  If <span class="replaceable">expression</span> evaluates to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>,
  PHP will execute <span class="replaceable">statement</span>, and if it evaluates
  to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> - it&#039;ll ignore it. More information about what values evaluate
  to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> can be found in the <a href="language.types.boolean.php#language.types.boolean.casting" class="link">&#039;Converting to boolean&#039;</a>
  section.
 </p>
 <p class="para">
  The following example would display <span class="computeroutput">a is bigger
  than b</span> if <var class="varname">$a</var> is bigger
  than <var class="varname">$b</var>:
  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">$a </span><span style="color: #007700">&gt; </span><span style="color: #0000BB">$b</span><span style="color: #007700">)<br />  echo </span><span style="color: #DD0000">"a is bigger than b"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <p class="para">
  Often you&#039;d want to have more than one statement to be executed
  conditionally.  Of course, there&#039;s no need to wrap each statement
  with an <code class="literal">if</code> clause.  Instead, you can group
  several statements into a statement group.  For example, this code
  would display <span class="computeroutput">a is bigger than b</span>
  if <var class="varname">$a</var> is bigger than
  <var class="varname">$b</var>, and would then assign the value of
  <var class="varname">$a</var> into <var class="varname">$b</var>:
  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">$a </span><span style="color: #007700">&gt; </span><span style="color: #0000BB">$b</span><span style="color: #007700">) {<br />  echo </span><span style="color: #DD0000">"a is bigger than b"</span><span style="color: #007700">;<br />  </span><span style="color: #0000BB">$b </span><span style="color: #007700">= </span><span style="color: #0000BB">$a</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <p class="simpara">
  <code class="literal">If</code> statements can be nested infinitely within other
  <code class="literal">if</code> statements, which provides you with complete
  flexibility for conditional execution of the various parts of your
  program.
 </p>
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/control-structures/if.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fcontrol-structures.if%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=control-structures.if&amp;repo=en&amp;redirect=https://www.php.net/manual/en/control-structures.if.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="112231">  <div class="votes">
    <div id="Vu112231">
    <a href="/manual/vote-note.php?id=112231&amp;page=control-structures.if&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112231">
    <a href="/manual/vote-note.php?id=112231&amp;page=control-structures.if&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112231" title="53% like this...">
    189
    </div>
  </div>
  <a href="#112231" class="name">
  <strong class="user"><em>robk</em></strong></a><a class="genanchor" href="#112231"> &para;</a><div class="date" title="2013-05-20 01:02"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112231">
<div class="phpcode"><code><span class="html">easy way to execute conditional html / javascript / css / other language code with php if else:<br /><br /><span class="default">&lt;?php </span><span class="keyword">if (</span><span class="default">condition</span><span class="keyword">): </span><span class="default">?&gt;<br /></span><br />html code to run if condition is true<br /><br /><span class="default">&lt;?php </span><span class="keyword">else: </span><span class="default">?&gt;<br /></span><br />html code to run if condition is false<br /><br /><span class="default">&lt;?php </span><span class="keyword">endif </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129682">  <div class="votes">
    <div id="Vu129682">
    <a href="/manual/vote-note.php?id=129682&amp;page=control-structures.if&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129682">
    <a href="/manual/vote-note.php?id=129682&amp;page=control-structures.if&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129682" title="64% like this...">
    10
    </div>
  </div>
  <a href="#129682" class="name">
  <strong class="user"><em>georgy dot moshkin at techsponsor dot io</em></strong></a><a class="genanchor" href="#129682"> &para;</a><div class="date" title="2024-07-31 09:46"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129682">
<div class="phpcode"><code><span class="html">Left-to-right evaluation of &amp;&amp; operators has one useful feature: evaluation stops after first "false" operand is encountered.<br /> <br />This feature can be useful for creating following construction:<br /><br />$someVar==123 is not evaluated, so there will be no warnings such as "Undefined variable $someVar":<br /><span class="default">&lt;?php<br /></span><span class="comment">// $someVar=123; - commented line<br /></span><span class="keyword">if ((!empty(</span><span class="default">$someVar</span><span class="keyword">))&amp;&amp;(</span><span class="default">$someVar</span><span class="keyword">==</span><span class="default">123</span><span class="keyword">))<br />{<br />    echo </span><span class="default">$someVar</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Function someFunc($someVar) will not be called:<br /><span class="default">&lt;?php<br /></span><span class="comment">// $someVar=123; - commented line<br /></span><span class="keyword">if ((!empty(</span><span class="default">$someVar</span><span class="keyword">))&amp;&amp;(</span><span class="default">someFunc</span><span class="keyword">(</span><span class="default">$someVar</span><span class="keyword">)))<br />{<br />    echo </span><span class="default">$someVar</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />This will give "Warning: Undefined variable $someVar" error. Order matters:<br /><span class="default">&lt;?php<br /></span><span class="comment">// $someVar=123;<br /></span><span class="keyword">if ((</span><span class="default">someFunc</span><span class="keyword">(</span><span class="default">$someVar</span><span class="keyword">))&amp;&amp;(!empty(</span><span class="default">$someVar</span><span class="keyword">)))<br />{<br />    echo </span><span class="default">$someVar</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="101724">  <div class="votes">
    <div id="Vu101724">
    <a href="/manual/vote-note.php?id=101724&amp;page=control-structures.if&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101724">
    <a href="/manual/vote-note.php?id=101724&amp;page=control-structures.if&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101724" title="53% like this...">
    45
    </div>
  </div>
  <a href="#101724" class="name">
  <strong class="user"><em>techguy14 at gmail dot com</em></strong></a><a class="genanchor" href="#101724"> &para;</a><div class="date" title="2011-01-06 01:39"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101724">
<div class="phpcode"><code><span class="html">You can have 'nested' if statements withing a single if statement, using additional parenthesis.
<br />For example, instead of having:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">if( </span><span class="default">$a </span><span class="keyword">== </span><span class="default">1 </span><span class="keyword">|| </span><span class="default">$a </span><span class="keyword">== </span><span class="default">2 </span><span class="keyword">) {
<br />    if( </span><span class="default">$b </span><span class="keyword">== </span><span class="default">3 </span><span class="keyword">|| </span><span class="default">$b </span><span class="keyword">== </span><span class="default">4 </span><span class="keyword">) {
<br />        if( </span><span class="default">$c </span><span class="keyword">== </span><span class="default">5 </span><span class="keyword">|| $ </span><span class="default">d </span><span class="keyword">== </span><span class="default">6 </span><span class="keyword">) {
<br />             </span><span class="comment">//Do something here.
<br />        </span><span class="keyword">}
<br />    }
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />You could just simply do this:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">if( (</span><span class="default">$a</span><span class="keyword">==</span><span class="default">1 </span><span class="keyword">|| </span><span class="default">$a</span><span class="keyword">==</span><span class="default">2</span><span class="keyword">) &amp;&amp; (</span><span class="default">$b</span><span class="keyword">==</span><span class="default">3 </span><span class="keyword">|| </span><span class="default">$b</span><span class="keyword">==</span><span class="default">4</span><span class="keyword">) &amp;&amp; (</span><span class="default">$c</span><span class="keyword">==</span><span class="default">5 </span><span class="keyword">|| </span><span class="default">$c</span><span class="keyword">==</span><span class="default">6</span><span class="keyword">) ) {
<br />    </span><span class="comment">//do that something here.
<br /></span><span class="keyword">}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Hope this helps!</span></code></div>
  </div>
 </div>
  <div class="note" id="81698">  <div class="votes">
    <div id="Vu81698">
    <a href="/manual/vote-note.php?id=81698&amp;page=control-structures.if&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81698">
    <a href="/manual/vote-note.php?id=81698&amp;page=control-structures.if&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81698" title="51% like this...">
    24
    </div>
  </div>
  <a href="#81698" class="name">
  <strong class="user"><em>grawity at gmail dot com</em></strong></a><a class="genanchor" href="#81698"> &para;</a><div class="date" title="2008-03-10 03:41"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81698">
<div class="phpcode"><code><span class="html">re: #80305<br /><br />Again useful for newbies:<br /><br />if you need to compare a variable with a value, instead of doing<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if (</span><span class="default">$foo </span><span class="keyword">== </span><span class="default">3</span><span class="keyword">) </span><span class="default">bar</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />do<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if (</span><span class="default">3 </span><span class="keyword">== </span><span class="default">$foo</span><span class="keyword">) </span><span class="default">bar</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />this way, if you forget a =, it will become<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if (</span><span class="default">3 </span><span class="keyword">= </span><span class="default">$foo</span><span class="keyword">) </span><span class="default">bar</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />and PHP will report an error.</span></code></div>
  </div>
 </div>
  <div class="note" id="102060">  <div class="votes">
    <div id="Vu102060">
    <a href="/manual/vote-note.php?id=102060&amp;page=control-structures.if&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102060">
    <a href="/manual/vote-note.php?id=102060&amp;page=control-structures.if&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102060" title="50% like this...">
    15
    </div>
  </div>
  <a href="#102060" class="name">
  <strong class="user"><em>Christian L.</em></strong></a><a class="genanchor" href="#102060"> &para;</a><div class="date" title="2011-01-25 10:58"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102060">
<div class="phpcode"><code><span class="html">An other way for controls is the ternary operator (see Comparison Operators) that can be used as follows:<br /><br /><span class="default">&lt;?php<br />$v </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /><br /></span><span class="default">$r </span><span class="keyword">= (</span><span class="default">1 </span><span class="keyword">== </span><span class="default">$v</span><span class="keyword">) ? </span><span class="string">'Yes' </span><span class="keyword">: </span><span class="string">'No'</span><span class="keyword">; </span><span class="comment">// $r is set to 'Yes'<br /></span><span class="default">$r </span><span class="keyword">= (</span><span class="default">3 </span><span class="keyword">== </span><span class="default">$v</span><span class="keyword">) ? </span><span class="string">'Yes' </span><span class="keyword">: </span><span class="string">'No'</span><span class="keyword">; </span><span class="comment">// $r is set to 'No'<br /><br /></span><span class="keyword">echo (</span><span class="default">1 </span><span class="keyword">== </span><span class="default">$v</span><span class="keyword">) ? </span><span class="string">'Yes' </span><span class="keyword">: </span><span class="string">'No'</span><span class="keyword">; </span><span class="comment">// 'Yes' will be printed<br /><br />// and since PHP 5.3<br /></span><span class="default">$v </span><span class="keyword">= </span><span class="string">'My Value'</span><span class="keyword">;<br /></span><span class="default">$r </span><span class="keyword">= (</span><span class="default">$v</span><span class="keyword">) ?: </span><span class="string">'No Value'</span><span class="keyword">; </span><span class="comment">// $r is set to 'My Value' because $v is evaluated to TRUE<br /><br /></span><span class="default">$v </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />echo (</span><span class="default">$v</span><span class="keyword">) ?: </span><span class="string">'No Value'</span><span class="keyword">; </span><span class="comment">// 'No Value' will be printed because $v is evaluated to FALSE<br /></span><span class="default">?&gt;<br /></span><br />Parentheses can be left out in all examples above.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=control-structures.if&amp;repo=en&amp;redirect=https://www.php.net/manual/en/control-structures.if.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.control-structures.php">Control Structures</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="control-structures.intro.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="current">
                            <a href="control-structures.if.php" title="if">if</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.else.php" title="else">else</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.elseif.php" title="elseif/else if">elseif/else if</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.alternative-syntax.php" title="Alternative syntax for control structures">Alternative syntax for control structures</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.while.php" title="while">while</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.do.while.php" title="do-&#8203;while">do-&#8203;while</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.for.php" title="for">for</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.foreach.php" title="foreach">foreach</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.break.php" title="break">break</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.continue.php" title="continue">continue</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.switch.php" title="switch">switch</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.match.php" title="match">match</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.declare.php" title="declare">declare</a>
                        </li>
                                                <li class="">
                            <a href="function.return.php" title="return">return</a>
                        </li>
                                                <li class="">
                            <a href="function.require.php" title="require">require</a>
                        </li>
                                                <li class="">
                            <a href="function.include.php" title="include">include</a>
                        </li>
                                                <li class="">
                            <a href="function.require-once.php" title="require_&#8203;once">require_&#8203;once</a>
                        </li>
                                                <li class="">
                            <a href="function.include-once.php" title="include_&#8203;once">include_&#8203;once</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.goto.php" title="goto">goto</a>
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
