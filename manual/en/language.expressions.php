<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Expressions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.expressions.php">
 <link rel="shorturl" href="https://www.php.net/expressions">
 <link rel="alternate" href="https://www.php.net/expressions" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/langref.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.constants.magic.php">
 <link rel="next" href="https://www.php.net/manual/en/language.operators.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.expressions.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.expressions.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.expressions.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.expressions.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.expressions.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.expressions.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.expressions.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.expressions.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.expressions.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.expressions.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.expressions.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Expressions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Expressions - Manual" />
<meta name="twitter:description" content="Expressions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Expressions - Manual" />
<meta itemprop="description" content="Expressions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Expressions" />

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
        <a href="language.operators.php">
          Operators &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.constants.magic.php">
          &laquo; Magic constants        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      </ul>
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
            <option value='en/language.expressions.php' selected="selected">English</option>
            <option value='de/language.expressions.php'>German</option>
            <option value='es/language.expressions.php'>Spanish</option>
            <option value='fr/language.expressions.php'>French</option>
            <option value='it/language.expressions.php'>Italian</option>
            <option value='ja/language.expressions.php'>Japanese</option>
            <option value='pt_BR/language.expressions.php'>Brazilian Portuguese</option>
            <option value='ru/language.expressions.php'>Russian</option>
            <option value='tr/language.expressions.php'>Turkish</option>
            <option value='uk/language.expressions.php'>Ukrainian</option>
            <option value='zh/language.expressions.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.expressions" class="chapter">
   <h1 class="title">Expressions</h1>

   <p class="simpara">
    Expressions are the most important building blocks of PHP. In PHP,
    almost anything you write is an expression. The simplest yet
    most accurate way to define an expression is &quot;anything that has a
    value&quot;.
   </p>
   <p class="simpara">
    The most basic forms of expressions are constants and variables.
    When you type <code class="code">$a = 5</code>, you&#039;re assigning <code class="code">5</code> into
    <var class="varname">$a</var>. <code class="code">5</code>, obviously,
    has the value 5, or in other words <code class="code">5</code> is an expression with the
    value of 5 (in this case, <code class="code">5</code> is an integer constant).
   </p>
   <p class="simpara">
    After this assignment, you&#039;d expect <var class="varname">$a</var>&#039;s value to be 5 as
    well, so if you wrote <code class="code">$b = $a</code>, you&#039;d expect it to behave just as
    if you wrote <code class="code">$b = 5</code>. In other words, <var class="varname">$a</var> is an expression with the
    value of 5 as well. If everything works right, this is exactly
    what will happen.
   </p>
   <p class="para">
    Slightly more complex examples for expressions are functions. For
    instance, consider the following function:
    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">foo </span><span style="color: #007700">()<br />{<br />    return </span><span style="color: #0000BB">5</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
   <p class="simpara">
    Assuming you&#039;re familiar with the concept of functions (if you&#039;re
    not, take a look at the chapter about <a href="language.functions.php" class="link">functions</a>), you&#039;d assume
    that typing <code class="code">$c = foo()</code> is essentially just like
    writing <code class="code">$c = 5</code>, and you&#039;re right. Functions
    are expressions with the value of their return value. Since <code class="code">foo()</code>
    returns 5, the value of the expression &#039;<code class="code">foo()</code>&#039; is 5. Usually
    functions don&#039;t just return a static value but compute something.
   </p>
   <p class="simpara">
    Of course, values in PHP don&#039;t have to be integers, and very often
    they aren&#039;t. PHP supports four scalar value types: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    values, floating point values (<span class="type"><a href="language.types.float.php" class="type float">float</a></span>), <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    values and <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> values (scalar values are values that you
    can&#039;t &#039;break&#039; into smaller pieces, unlike arrays, for instance). PHP also 
    supports two composite (non-scalar) types: arrays and objects. Each of
    these value types can be assigned into variables or returned from functions.
   </p>
   <p class="simpara">
    PHP takes expressions much further, in the same way many other languages
    do. PHP is an expression-oriented language, in the
    sense that almost everything is an expression. Consider the
    example we&#039;ve already dealt with, <code class="code">$a = 5</code>. It&#039;s easy to see that
    there are two values involved here, the value of the integer
    constant <code class="code">5</code>, and the value of <var class="varname">$a</var> which is being updated to 5 as
    well. But the truth is that there&#039;s one additional value involved
    here, and that&#039;s the value of the assignment itself. The
    assignment itself evaluates to the assigned value, in this case 5.
    In practice, it means that <code class="code">$a = 5</code>, regardless of what it does,
    is an expression with the value 5. Thus, writing something like
    <code class="code">$b = ($a = 5)</code> is like writing
    <code class="code">$a = 5; $b = 5;</code> (a semicolon
    marks the end of a statement). Since assignments are parsed in a
    right to left order, you can also write <code class="code">$b = $a = 5</code>.
   </p>
   <p class="simpara">
    Another good example of expression orientation is pre- and
    post-increment and decrement. Users of PHP and many other
    languages may be familiar with the notation of <code class="code">variable++</code> and
    <code class="code">variable--</code>. These are <a href="language.operators.increment.php" class="link">
    increment and decrement operators</a>. In PHP, like in C, there
    are two types of increment - pre-increment and post-increment.
    Both pre-increment and post-increment essentially increment the
    variable, and the effect on the variable is identical. The
    difference is with the value of the increment expression.
    Pre-increment, which is written <code class="code">++$variable</code>, evaluates to the
    incremented value (PHP increments the variable before reading its
    value, thus the name &#039;pre-increment&#039;). Post-increment, which is
    written <code class="code">$variable++</code> evaluates to the original value of
    <var class="varname">$variable</var>, before it was incremented (PHP increments the variable
    after reading its value, thus the name &#039;post-increment&#039;).
   </p>
   <p class="simpara">
    A very common type of expressions are <a href="language.operators.comparison.php" class="link">comparison</a>
    expressions. These expressions evaluate to either  <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> or <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>. PHP
    supports &gt; (bigger than), &gt;= (bigger than or equal to), == (equal),
    != (not equal), &lt; (smaller than) and &lt;= (smaller than or equal to).
    The language also supports a set of strict equivalence operators: ===
    (equal to and same type) and !== (not equal to or not same type).
    These expressions are most commonly used inside conditional execution,
    such as <code class="code">if</code> statements.
   </p>
   <p class="simpara">
    The last example of expressions we&#039;ll deal with here is combined
    operator-assignment expressions. You already know that if you
    want to increment <var class="varname">$a</var> by 1, you can simply write
    <code class="code">$a++</code> or <code class="code">++$a</code>.
    But what if you want to add more than one to it, for instance 3?
    You could write <code class="code">$a++</code> multiple times, but this
    is obviously not a very efficient or comfortable way. A much more
    common practice is to write <code class="code">$a =
    $a + 3</code>. <code class="code">$a + 3</code> evaluates
    to the value of <var class="varname">$a</var> plus 3, and is assigned back
    into <var class="varname">$a</var>, which results in incrementing <var class="varname">$a</var>
    by 3. In PHP, as in several other languages like C, you can write this
    in a shorter way, which with time would become clearer and quicker to
    understand as well. Adding 3 to the current value of <var class="varname">$a</var>
    can be written <code class="code">$a += 3</code>. This means exactly
    &quot;take the value of <var class="varname">$a</var>, add 3 to it, and assign it
    back into <var class="varname">$a</var>&quot;. In addition to being shorter and
    clearer, this also results in faster execution. The value of
    <code class="code">$a += 3</code>, like the value of a regular assignment, is
    the assigned value. Notice that it is NOT 3, but the combined value
    of <var class="varname">$a</var> plus 3 (this is the value that&#039;s
    assigned into <var class="varname">$a</var>). Any two-place operator can be used
    in this operator-assignment mode, for example <code class="code">$a -= 5</code>
    (subtract 5 from the value of <var class="varname">$a</var>), <code class="code">$b *= 7</code>
    (multiply the value of <var class="varname">$b</var> by 7), etc.
   </p>
   <p class="para">
    There is one more expression that may seem odd if you haven&#039;t seen
    it in other languages, the ternary conditional operator:
   </p>
   <p class="para">
    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$first </span><span style="color: #007700">? </span><span style="color: #0000BB">$second </span><span style="color: #007700">: </span><span style="color: #0000BB">$third<br />?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
   <p class="para">
    If the value of the first subexpression is <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> (non-zero), then
    the second subexpression is evaluated, and that is the result of
    the conditional expression. Otherwise, the third subexpression is
    evaluated, and that is the value.
   </p>
   <p class="para">
    The following example should help you understand pre- and
    post-increment and expressions in general a bit better:
   </p>
   <p class="para">
    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">double</span><span style="color: #007700">(</span><span style="color: #0000BB">$i</span><span style="color: #007700">)<br />{<br />    return </span><span style="color: #0000BB">$i</span><span style="color: #007700">*</span><span style="color: #0000BB">2</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= </span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">5</span><span style="color: #007700">;        </span><span style="color: #FF8000">/* assign the value five into the variable $a and $b */<br /></span><span style="color: #0000BB">$c </span><span style="color: #007700">= </span><span style="color: #0000BB">$a</span><span style="color: #007700">++;          </span><span style="color: #FF8000">/* post-increment, assign original value of $a <br />                       (5) to $c */<br /></span><span style="color: #0000BB">$e </span><span style="color: #007700">= </span><span style="color: #0000BB">$d </span><span style="color: #007700">= ++</span><span style="color: #0000BB">$b</span><span style="color: #007700">;     </span><span style="color: #FF8000">/* pre-increment, assign the incremented value of <br />                       $b (6) to $d and $e */<br /><br />/* at this point, both $d and $e are equal to 6 */<br /><br /></span><span style="color: #0000BB">$f </span><span style="color: #007700">= </span><span style="color: #0000BB">double</span><span style="color: #007700">(</span><span style="color: #0000BB">$d</span><span style="color: #007700">++);  </span><span style="color: #FF8000">/* assign twice the value of $d before<br />                       the increment, 2*6 = 12 to $f */<br /></span><span style="color: #0000BB">$g </span><span style="color: #007700">= </span><span style="color: #0000BB">double</span><span style="color: #007700">(++</span><span style="color: #0000BB">$e</span><span style="color: #007700">);  </span><span style="color: #FF8000">/* assign twice the value of $e after<br />                       the increment, 2*7 = 14 to $g */<br /></span><span style="color: #0000BB">$h </span><span style="color: #007700">= </span><span style="color: #0000BB">$g </span><span style="color: #007700">+= </span><span style="color: #0000BB">10</span><span style="color: #007700">;      </span><span style="color: #FF8000">/* first, $g is incremented by 10 and ends with the <br />                       value of 24. the value of the assignment (24) is <br />                       then assigned into $h, and $h ends with the value <br />                       of 24 as well. */<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
   <p class="simpara">
    Some expressions can be considered as statements. In
    this case, a statement has the form of &#039;<code class="code">expr ;</code>&#039; that is, an
    expression followed by a semicolon. In <code class="code">$b = $a = 5;</code>,
    <code class="code">$a = 5</code> is a valid expression, but it&#039;s not a statement
    by itself. <code class="code">$b = $a = 5;</code>, however, is a valid statement.
   </p>
   <p class="simpara">
    One last thing worth mentioning is the truth value of expressions.
    In many events, mainly in conditional execution and loops, you&#039;re
    not interested in the specific value of the expression, but only
    care about whether it means <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
    
    
    
    The constants <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> and <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> (case-insensitive) are the two 
    possible boolean values. When necessary, an expression is 
    automatically converted to boolean. See the 
    <a href="language.types.type-juggling.php#language.types.typecasting" class="link">section about
    type-casting</a> for details about how.
   </p>
   <p class="simpara">
    PHP provides a full and powerful implementation of expressions, and
    documenting it entirely goes beyond the scope of this manual. The
    above examples should give you a good idea about what expressions
    are and how you can construct useful expressions. Throughout the
    rest of this manual we&#039;ll write <var class="varname">expr</var>
    to indicate any valid PHP expression.
   </p>
  </div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/expressions.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.expressions%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.expressions&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.expressions.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">12 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="90327">  <div class="votes">
    <div id="Vu90327">
    <a href="/manual/vote-note.php?id=90327&amp;page=language.expressions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90327">
    <a href="/manual/vote-note.php?id=90327&amp;page=language.expressions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90327" title="59% like this...">
    59
    </div>
  </div>
  <a href="#90327" class="name">
  <strong class="user"><em>Magnus Deininger, dma05 at web dot de</em></strong></a><a class="genanchor" href="#90327"> &para;</a><div class="date" title="2009-04-16 08:04"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90327">
<div class="phpcode"><code><span class="html">Note that even though PHP borrows large portions of its syntax from C, the ',' is treated quite differently. It's not possible to create combined expressions in PHP using the comma-operator that C has, except in for() loops.<br /><br />Example (parse error):<br /><br /><span class="default">&lt;?php<br /><br />$a </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">, </span><span class="default">$b </span><span class="keyword">= </span><span class="default">4</span><span class="keyword">;<br /><br />echo </span><span class="default">$a</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;<br />echo </span><span class="default">$b</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />Example (works):<br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">for (</span><span class="default">$a </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">, </span><span class="default">$b </span><span class="keyword">= </span><span class="default">4</span><span class="keyword">; </span><span class="default">$a </span><span class="keyword">&lt; </span><span class="default">3</span><span class="keyword">; </span><span class="default">$a</span><span class="keyword">++)<br />{<br />  echo </span><span class="default">$a</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;<br />  echo </span><span class="default">$b</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />This is because PHP doesn't actually have a proper comma-operator, it's only supported as syntactic sugar in for() loop headers. In C, it would have been perfectly legitimate to have this:<br /><br />int f()<br />{<br />  int a, b;<br />  a = 2, b = 4;<br /><br />  return a;<br />}<br /><br />or even this:<br /><br />int g()<br />{<br />  int a, b;<br />  a = (2, b = 4);<br /><br />  return a;<br />}<br /><br />In f(), a would have been set to 2, and b would have been set to 4.<br />In g(), (2, b = 4) would be a single expression which evaluates to 4, so both a and b would have been set to 4.</span></code></div>
  </div>
 </div>
  <div class="note" id="11883">  <div class="votes">
    <div id="Vu11883">
    <a href="/manual/vote-note.php?id=11883&amp;page=language.expressions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd11883">
    <a href="/manual/vote-note.php?id=11883&amp;page=language.expressions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V11883" title="59% like this...">
    54
    </div>
  </div>
  <a href="#11883" class="name">
  <strong class="user"><em>yasuo_ohgaki at hotmail dot com</em></strong></a><a class="genanchor" href="#11883"> &para;</a><div class="date" title="2001-03-11 11:14"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom11883">
<div class="phpcode"><code><span class="html">Manual defines "expression is anything that has value", Therefore, parser will give error for following code.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">) ? echo(</span><span class="string">'true'</span><span class="keyword">) : echo(</span><span class="string">'false'</span><span class="keyword">);
<br /></span><span class="default">Note</span><span class="keyword">: </span><span class="string">"? : " </span><span class="default">operator has this syntax  </span><span class="string">"expr ? expr : expr;"
<br /></span><span class="default">?&gt;
<br /></span>
<br />since echo does not have(return) value and ?: expects expression(value).
<br />
<br />However, if function/language constructs that have/return value, such as include(), parser compiles code.
<br />
<br />Note: User defined functions always have/return value without explicit return statement (returns NULL if there is no return statement). Therefore, user defined functions are always valid expressions. 
<br />[It may be useful to have VOID as new type to prevent programmer to use function as RVALUE by mistake]
<br />
<br />For example,
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">) ? include(</span><span class="string">'true.inc'</span><span class="keyword">) : include(</span><span class="string">'false.inc'</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />is valid, since "include" returns value.
<br />
<br />The fact "echo" does not return value(="echo" is not a expression), is less obvious to me. 
<br />
<br />Print() and Echo() is NOT identical since print() has/returns value and can be a valid expression.</span></code></div>
  </div>
 </div>
  <div class="note" id="112682">  <div class="votes">
    <div id="Vu112682">
    <a href="/manual/vote-note.php?id=112682&amp;page=language.expressions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112682">
    <a href="/manual/vote-note.php?id=112682&amp;page=language.expressions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112682" title="60% like this...">
    26
    </div>
  </div>
  <a href="#112682" class="name">
  <strong class="user"><em>chriswarbo at gmail dot com</em></strong></a><a class="genanchor" href="#112682"> &para;</a><div class="date" title="2013-07-12 11:06"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112682">
<div class="phpcode"><code><span class="html">Note that there is a difference between a function and a function call, and both<br />are expressions. PHP has two kinds of function, "named functions" and "anonymous<br />functions". Here's an example with both:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// A named function. Its name is "double".<br /></span><span class="keyword">function </span><span class="default">double</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">) {<br />  return </span><span class="default">2 </span><span class="keyword">* </span><span class="default">$x</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// An anonymous function. It has no name, in the same way that the string<br />// "hello" has no name. Since it is an expression, we can give it a temporary<br />// name by assigning it to the variable $triple.<br /></span><span class="default">$triple </span><span class="keyword">= function(</span><span class="default">$x</span><span class="keyword">) {<br />  return </span><span class="default">3 </span><span class="keyword">* </span><span class="default">$x</span><span class="keyword">;<br />};<br /></span><span class="default">?&gt;<br /></span><br />We can "call" (or "run") both kinds of function. A "function call" is an<br />expression with the value of whatever the function returns. For example:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// The easiest way to run a function is to put () after its name, containing its<br />// arguments (if any)<br /></span><span class="default">$my_numbers </span><span class="keyword">= array(</span><span class="default">double</span><span class="keyword">(</span><span class="default">5</span><span class="keyword">), </span><span class="default">$triple</span><span class="keyword">(</span><span class="default">5</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />$my_numbers is now an array containing 10 and 15, which are the return values of<br />double and $triple when applied to the number 5.<br /><br />Importantly, if we *don't* call a function, ie. we don't put () after its name,<br />then we still get expressions. For example:<br /><br /><span class="default">&lt;?php<br />$my_functions </span><span class="keyword">= array(</span><span class="string">'double'</span><span class="keyword">, </span><span class="default">$triple</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />$my_functions is now an array containing these two functions. Notice that named<br />functions are more awkward than anonymous functions. PHP treats them differently<br />because it didn't use to have anonymous functions, and the way named functions<br />were implemented didn't work for anonymous functions when they were eventually<br />added.<br /><br />This means that instead of using a named function literally, like we can with<br />anonymous functions, we have to use a string containing its name instead. PHP<br />makes sure that these strings will be treated as functions when it's<br />appropriate. For example:<br /><br /><span class="default">&lt;?php<br />$temp      </span><span class="keyword">= </span><span class="string">'double'</span><span class="keyword">;<br /></span><span class="default">$my_number </span><span class="keyword">= </span><span class="default">$temp</span><span class="keyword">(</span><span class="default">5</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />$my_number will be 10, since PHP has spotted that we're treating a string as if<br />it were a function, so it has looked up that named function for us.<br /><br />Unfortunately PHP's parser is very quirky; rather than looking for generic<br />patterns like "x(y)" and seeing if "x" is a function, it has lots of<br />special-cases like "$x(y)". This makes code like "'double'(5)" invalid, so we<br />have to do tricks like using temporary variables. There is another way around<br />this restriction though, and that is to pass our functions to the<br />"call_user_func" or "call_user_func_array" functions when we want to call them.<br />For example:<br /><br /><span class="default">&lt;?php<br />$my_numbers </span><span class="keyword">= array(</span><span class="default">call_user_func</span><span class="keyword">(</span><span class="string">'double'</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">), </span><span class="default">call_user_func</span><span class="keyword">(</span><span class="default">$triple</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />$my_numbers contains 10 and 15 because "call_user_func" called our functions for<br />us. This is possible because the string 'double' and the anonymous function<br />$triple are expressions. Note that we can even use this technique to call an<br />anonymous function without ever giving it a name:<br /><br /><span class="default">&lt;?php<br />$my_number </span><span class="keyword">= </span><span class="default">call_user_func</span><span class="keyword">(function(</span><span class="default">$x</span><span class="keyword">) { return </span><span class="default">4 </span><span class="keyword">* </span><span class="default">$x</span><span class="keyword">; }, </span><span class="default">5</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />$my_number is now 20, since "call_user_func" called the anonymous function,<br />which quadruples its argument, with the value 5.<br /><br />Passing functions around as expressions like this is very useful whenever we<br />need to use a 'callback'. Great examples of this are array_map and array_reduce.</span></code></div>
  </div>
 </div>
  <div class="note" id="77291">  <div class="votes">
    <div id="Vu77291">
    <a href="/manual/vote-note.php?id=77291&amp;page=language.expressions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77291">
    <a href="/manual/vote-note.php?id=77291&amp;page=language.expressions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77291" title="58% like this...">
    18
    </div>
  </div>
  <a href="#77291" class="name">
  <strong class="user"><em>winks716</em></strong></a><a class="genanchor" href="#77291"> &para;</a><div class="date" title="2007-08-23 01:42"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77291">
<div class="phpcode"><code><span class="html">reply to egonfreeman at gmail dot com<br />04-Apr-2007 07:45 <br /><br />the second example u mentioned as follow:<br />=====================================<br /><br />$n = 3;<br />$n * $n++<br /><br />from 3 * 3 into 3 * 4. Post- operations operate on a variable after it has been 'checked', but it doesn't necessarily state that it should happen AFTER an evaluation is over (on the contrary, as a matter of fact).<br /><br />===========================================<br /><br />everything works correctly but one sentence should be modified:<br /><br />"from 3 * 3 into 3 * 4"  should be "from 3 * 3 into 4 * 3"<br /><br />best regards~ :)</span></code></div>
  </div>
 </div>
  <div class="note" id="74308">  <div class="votes">
    <div id="Vu74308">
    <a href="/manual/vote-note.php?id=74308&amp;page=language.expressions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74308">
    <a href="/manual/vote-note.php?id=74308&amp;page=language.expressions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74308" title="60% like this...">
    16
    </div>
  </div>
  <a href="#74308" class="name">
  <strong class="user"><em>egonfreeman at gmail dot com</em></strong></a><a class="genanchor" href="#74308"> &para;</a><div class="date" title="2007-04-04 07:45"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74308">
<div class="phpcode"><code><span class="html">It is worthy to mention that:<br /><br />$n = 3;<br />$n * --$n<br /><br />WILL RETURN 4 instead of 6.<br /><br />It can be a hard to spot "error", because in our human thought process this really isn't an error at all! But you have to remember that PHP (as it is with many other high-level languages) evaluates its statements RIGHT-TO-LEFT, and therefore "--$n" comes BEFORE multiplying, so - in the end - it's really "2 * 2", not "3 * 2".<br /><br />It is also worthy to mention that the same behavior will change:<br /><br />$n = 3;<br />$n * $n++<br /><br />from 3 * 3 into 3 * 4. Post- operations operate on a variable after it has been 'checked', but it doesn't necessarily state that it should happen AFTER an evaluation is over (on the contrary, as a matter of fact).<br /><br />So, if you ever find yourself on a 'wild goose chase' for a bug in that "impossible-to-break, so-very-simple" piece of code that uses pre-/post-'s, remember this post. :)<br /><br />(just thought I'd check it out - turns out I was right :P)</span></code></div>
  </div>
 </div>
  <div class="note" id="21750">  <div class="votes">
    <div id="Vu21750">
    <a href="/manual/vote-note.php?id=21750&amp;page=language.expressions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd21750">
    <a href="/manual/vote-note.php?id=21750&amp;page=language.expressions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V21750" title="55% like this...">
    19
    </div>
  </div>
  <a href="#21750" class="name">
  <strong class="user"><em>Mattias at mail dot ee</em></strong></a><a class="genanchor" href="#21750"> &para;</a><div class="date" title="2002-05-25 03:29"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom21750">
<div class="phpcode"><code><span class="html">A note about the short-circuit behaviour of the boolean operators.<br /><br />1. if (func1() || func2())<br />Now, if func1() returns true, func2() isn't run, since the expression<br />will be true anyway.<br /><br />2. if (func1() &amp;&amp; func2())<br />Now, if func1() returns false, func2() isn't run, since the expression<br />will be false anyway.<br /><br />The reason for this behaviour comes probably from the programming<br />language C, on which PHP seems to be based on. There the<br />short-circuiting can be a very useful tool. For example:<br /><br />int * myarray = a_func_to_set_myarray(); // init the array<br />if (myarray != NULL &amp;&amp; myarray[0] != 4321) // check<br />    myarray[0] = 1234;<br /><br />Now, the pointer myarray is checked for being not null, then the<br />contents of the array is validated. This is important, because if<br />you try to access an array whose address is invalid, the program<br />will crash and die a horrible death. But thanks to the short<br />circuiting, if myarray == NULL then myarray[0] won't be accessed,<br />and the program will work fine.</span></code></div>
  </div>
 </div>
  <div class="note" id="81849">  <div class="votes">
    <div id="Vu81849">
    <a href="/manual/vote-note.php?id=81849&amp;page=language.expressions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81849">
    <a href="/manual/vote-note.php?id=81849&amp;page=language.expressions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81849" title="57% like this...">
    10
    </div>
  </div>
  <a href="#81849" class="name">
  <strong class="user"><em>denzoo at gmail dot com</em></strong></a><a class="genanchor" href="#81849"> &para;</a><div class="date" title="2008-03-16 04:52"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81849">
<div class="phpcode"><code><span class="html">To jvm at jvmyers dot com:<br />Your first two if statements just check if there's anything in the string, if you wish to actually execute the code in your string you need eval().</span></code></div>
  </div>
 </div>
  <div class="note" id="78636">  <div class="votes">
    <div id="Vu78636">
    <a href="/manual/vote-note.php?id=78636&amp;page=language.expressions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78636">
    <a href="/manual/vote-note.php?id=78636&amp;page=language.expressions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78636" title="55% like this...">
    9
    </div>
  </div>
  <a href="#78636" class="name">
  <strong class="user"><em>petruzanauticoyahoo?com!ar</em></strong></a><a class="genanchor" href="#78636"> &para;</a><div class="date" title="2007-10-20 08:41"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78636">
<div class="phpcode"><code><span class="html">Regarding the ternary operator, I would rather say that the best option is to enclose all the expression in parantheses, to avoid errors and improve clarity:<br /><br /><span class="default">&lt;?php<br />   </span><span class="keyword">print ( </span><span class="default">$a </span><span class="keyword">&gt; </span><span class="default">1 </span><span class="keyword">? </span><span class="string">"many" </span><span class="keyword">: </span><span class="string">"just one" </span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />PS: for php, C++, and any other language that has it.</span></code></div>
  </div>
 </div>
  <div class="note" id="24119">  <div class="votes">
    <div id="Vu24119">
    <a href="/manual/vote-note.php?id=24119&amp;page=language.expressions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd24119">
    <a href="/manual/vote-note.php?id=24119&amp;page=language.expressions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V24119" title="55% like this...">
    8
    </div>
  </div>
  <a href="#24119" class="name">
  <strong class="user"><em>oliver at hankeln-online dot de</em></strong></a><a class="genanchor" href="#24119"> &para;</a><div class="date" title="2002-08-07 06:06"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom24119">
<div class="phpcode"><code><span class="html">The short-circuiting IS a feature. It is also available in C, so I suppose the developers won?t remove it in future PHP versions.<br /><br />It is rather nice to write:<br /><br />$file=fopen("foo","r") or die("Error!");<br /><br />Greets,<br />Oliver</span></code></div>
  </div>
 </div>
  <div class="note" id="120459">  <div class="votes">
    <div id="Vu120459">
    <a href="/manual/vote-note.php?id=120459&amp;page=language.expressions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120459">
    <a href="/manual/vote-note.php?id=120459&amp;page=language.expressions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120459" title="54% like this...">
    5
    </div>
  </div>
  <a href="#120459" class="name">
  <strong class="user"><em>Bichis Paul</em></strong></a><a class="genanchor" href="#120459"> &para;</a><div class="date" title="2017-01-12 03:10"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120459">
<div class="phpcode"><code><span class="html">Regarding 12345alex at gmx dot net's example:<br /><br />I think you miss the identical equal documentation line from: <a href="http://php.net/manual/en/language.operators.comparison.php" rel="nofollow" target="_blank">http://php.net/manual/en/language.operators.comparison.php</a> <br /><br />$a == $b     Equal     TRUE if $a is equal to $b after type juggling.<br />$a === $b     Identical     TRUE if $a is equal to $b, and they are of the same type. <br /><br />Try: <br />print array() === NULL ? "True" : "False";<br /><br />Check this:<br />var_dump(is_null(array()));</span></code></div>
  </div>
 </div>
  <div class="note" id="107687">  <div class="votes">
    <div id="Vu107687">
    <a href="/manual/vote-note.php?id=107687&amp;page=language.expressions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107687">
    <a href="/manual/vote-note.php?id=107687&amp;page=language.expressions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107687" title="55% like this...">
    6
    </div>
  </div>
  <a href="#107687" class="name">
  <strong class="user"><em>antickon at gmail dot com</em></strong></a><a class="genanchor" href="#107687"> &para;</a><div class="date" title="2012-02-26 07:29"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107687">
<div class="phpcode"><code><span class="html">evaluation order of subexpressions is not strictly defined for all operators<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">a</span><span class="keyword">() {echo </span><span class="string">'a'</span><span class="keyword">;}<br />function </span><span class="default">b</span><span class="keyword">() {echo </span><span class="string">'b'</span><span class="keyword">;}<br /></span><span class="default">a</span><span class="keyword">() == </span><span class="default">b</span><span class="keyword">(); </span><span class="comment">// outputs "ab", ie evaluates left-to-right<br /><br /></span><span class="default">$a </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">( </span><span class="default">$a </span><span class="keyword">== </span><span class="default">$a </span><span class="keyword">= </span><span class="default">4 </span><span class="keyword">); </span><span class="comment">// outputs bool(true), ie evaluates right-to-left<br /></span><span class="default">?&gt;<br /></span><br />this is not a bug: "we [php developers] make no guarantee about the order of evaluation".<br />See <a href="https://bugs.php.net/bug.php?id=61188" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=61188</a></span></code></div>
  </div>
 </div>
  <div class="note" id="73261">  <div class="votes">
    <div id="Vu73261">
    <a href="/manual/vote-note.php?id=73261&amp;page=language.expressions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73261">
    <a href="/manual/vote-note.php?id=73261&amp;page=language.expressions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73261" title="51% like this...">
    4
    </div>
  </div>
  <a href="#73261" class="name">
  <strong class="user"><em>shawnster</em></strong></a><a class="genanchor" href="#73261"> &para;</a><div class="date" title="2007-02-14 04:56"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73261">
<div class="phpcode"><code><span class="html">An easy fix (although intuitively tough to do...) is to reverse the comparison.<br /><br />if (5 == $a) {}<br /><br />If you forget the second '=', you'll get a parse error for trying to assign a value to a non-variable.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.expressions&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.expressions.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="langref.php">Language Reference</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="language.basic-syntax.php" title="Basic syntax">Basic syntax</a>
                        </li>
                                                <li class="">
                            <a href="language.types.php" title="Types">Types</a>
                        </li>
                                                <li class="">
                            <a href="language.variables.php" title="Variables">Variables</a>
                        </li>
                                                <li class="">
                            <a href="language.constants.php" title="Constants">Constants</a>
                        </li>
                                                <li class="current">
                            <a href="language.expressions.php" title="Expressions">Expressions</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.php" title="Operators">Operators</a>
                        </li>
                                                <li class="">
                            <a href="language.control-structures.php" title="Control Structures">Control Structures</a>
                        </li>
                                                <li class="">
                            <a href="language.functions.php" title="Functions">Functions</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.php" title="Classes and Objects">Classes and Objects</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.php" title="Namespaces">Namespaces</a>
                        </li>
                                                <li class="">
                            <a href="language.enumerations.php" title="Enumerations">Enumerations</a>
                        </li>
                                                <li class="">
                            <a href="language.errors.php" title="Errors">Errors</a>
                        </li>
                                                <li class="">
                            <a href="language.exceptions.php" title="Exceptions">Exceptions</a>
                        </li>
                                                <li class="">
                            <a href="language.fibers.php" title="Fibers">Fibers</a>
                        </li>
                                                <li class="">
                            <a href="language.generators.php" title="Generators">Generators</a>
                        </li>
                                                <li class="">
                            <a href="language.attributes.php" title="Attributes">Attributes</a>
                        </li>
                                                <li class="">
                            <a href="language.references.php" title="References Explained">References Explained</a>
                        </li>
                                                <li class="">
                            <a href="reserved.variables.php" title="Predefined Variables">Predefined Variables</a>
                        </li>
                                                <li class="">
                            <a href="reserved.exceptions.php" title="Predefined Exceptions">Predefined Exceptions</a>
                        </li>
                                                <li class="">
                            <a href="reserved.interfaces.php" title="Predefined Interfaces and Classes">Predefined Interfaces and Classes</a>
                        </li>
                                                <li class="">
                            <a href="reserved.attributes.php" title="Predefined Attributes">Predefined Attributes</a>
                        </li>
                                                <li class="">
                            <a href="context.php" title="Context options and parameters">Context options and parameters</a>
                        </li>
                                                <li class="">
                            <a href="wrappers.php" title="Supported Protocols and Wrappers">Supported Protocols and Wrappers</a>
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
