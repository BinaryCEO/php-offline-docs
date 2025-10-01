<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Recursive patterns - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/regexp.reference.recursive.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/regexp.reference.recursive.php">
 <link rel="alternate" href="https://www.php.net/manual/en/regexp.reference.recursive.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/reference.pcre.pattern.syntax.php">
 <link rel="prev" href="https://www.php.net/manual/en/regexp.reference.comments.php">
 <link rel="next" href="https://www.php.net/manual/en/regexp.reference.performance.php">

 <link rel="alternate" href="https://www.php.net/manual/en/regexp.reference.recursive.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/regexp.reference.recursive.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/regexp.reference.recursive.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/regexp.reference.recursive.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/regexp.reference.recursive.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/regexp.reference.recursive.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/regexp.reference.recursive.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/regexp.reference.recursive.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/regexp.reference.recursive.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/regexp.reference.recursive.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/regexp.reference.recursive.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Recursive patterns" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Recursive patterns - Manual" />
<meta name="twitter:description" content="Recursive patterns" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Recursive patterns - Manual" />
<meta itemprop="description" content="Recursive patterns" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Recursive patterns" />

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
        <a href="regexp.reference.performance.php">
          Performance &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="regexp.reference.comments.php">
          &laquo; Comments        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.text.php'>Text Processing</a></li>      <li><a href='book.pcre.php'>PCRE</a></li>      <li><a href='pcre.pattern.php'>PCRE Patterns</a></li>      <li><a href='reference.pcre.pattern.syntax.php'>PCRE regex syntax</a></li>      </ul>
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
            <option value='en/regexp.reference.recursive.php' selected="selected">English</option>
            <option value='de/regexp.reference.recursive.php'>German</option>
            <option value='es/regexp.reference.recursive.php'>Spanish</option>
            <option value='fr/regexp.reference.recursive.php'>French</option>
            <option value='it/regexp.reference.recursive.php'>Italian</option>
            <option value='ja/regexp.reference.recursive.php'>Japanese</option>
            <option value='pt_BR/regexp.reference.recursive.php'>Brazilian Portuguese</option>
            <option value='ru/regexp.reference.recursive.php'>Russian</option>
            <option value='tr/regexp.reference.recursive.php'>Turkish</option>
            <option value='uk/regexp.reference.recursive.php'>Ukrainian</option>
            <option value='zh/regexp.reference.recursive.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="regexp.reference.recursive" class="section">
  <h2 class="title">Recursive patterns</h2>
  <p class="para">
   Consider the problem of matching a string in parentheses,
   allowing for unlimited nested parentheses. Without the use
   of recursion, the best that can be done is to use a pattern
   that matches up to some fixed depth of nesting. It is not
   possible to handle an arbitrary nesting depth. Perl 5.6 has
   provided an experimental facility that allows regular
   expressions to recurse (among other things). The special
   item (?R) is provided for the specific case of recursion.
   This PCRE pattern solves the parentheses problem (assume
   the <a href="reference.pcre.pattern.modifiers.php" class="link">PCRE_EXTENDED</a>
   option is set so that white space is
   ignored):

   <code class="literal">\( ( (?&gt;[^()]+) | (?R) )* \)</code>
  </p>
  <p class="para">
   First it matches an opening parenthesis. Then it matches any
   number of substrings which can either be a sequence of
   non-parentheses, or a recursive match of the pattern itself
   (i.e. a correctly parenthesized substring). Finally there is
   a closing parenthesis.
  </p>
  <p class="para">
   This particular example pattern contains nested unlimited
   repeats, and so the use of a once-only subpattern for matching
   strings of non-parentheses is important when applying
   the pattern to strings that do not match. For example, when
   it is applied to

   <code class="literal">(aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa()</code>

   it yields &quot;no match&quot; quickly. However, if a once-only subpattern
   is not used, the match runs for a very long time
   indeed because there are so many different ways the + and *
   repeats can carve up the subject, and all have to be tested
   before failure can be reported.
  </p>
  <p class="para">
   The values set for any capturing subpatterns are those from
   the outermost level of the recursion at which the subpattern
   value is set. If the pattern above is matched against

   <code class="literal">(ab(cd)ef)</code>

   the value for the capturing parentheses is &quot;ef&quot;, which is
   the last value taken on at the top level. If additional
   parentheses are added, giving

   <code class="literal">\( ( ( (?&gt;[^()]+) | (?R) )* ) \)</code>
   then the string they capture
   is &quot;ab(cd)ef&quot;, the contents of the top level parentheses. If
   there are more than 15 capturing parentheses in a pattern,
   PCRE has to obtain extra memory to store data during a
   recursion, which it does by using pcre_malloc, freeing it
   via pcre_free afterwards. If no memory can be obtained, it
   saves data for the first 15 capturing parentheses only, as
   there is no way to give an out-of-memory error from within a
   recursion.
  </p>

  <p class="para">
   <code class="literal">(?1)</code>, <code class="literal">(?2)</code> and so on
   can be used for recursive subpatterns too. It is also possible to use named
   subpatterns: <code class="literal">(?P&gt;name)</code> or
   <code class="literal">(?&amp;name)</code>.
  </p>
  <p class="para">
   If the syntax for a recursive subpattern reference (either by number or
   by name) is used outside the parentheses to which it refers, it operates
   like a subroutine in a programming language. An earlier example
   pointed out that the pattern
   <code class="literal">(sens|respons)e and \1ibility</code>
   matches &quot;sense and sensibility&quot; and &quot;response and responsibility&quot;, but
   not &quot;sense and responsibility&quot;. If instead the pattern
   <code class="literal">(sens|respons)e and (?1)ibility</code>
   is used, it does match &quot;sense and responsibility&quot; as well as the other
   two strings. Such references must, however, follow the subpattern to
   which they refer.
  </p>

  <p class="para">
   The maximum length of a subject string is the largest positive number
   that an integer variable can hold. However, PCRE uses recursion to
   handle subpatterns and indefinite repetition. This means that the
   available stack space may limit the size of a subject string that can be
   processed by certain patterns.
  </p>

 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/pcre/pattern.syntax.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fregexp.reference.recursive%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=regexp.reference.recursive&amp;repo=en&amp;redirect=https://www.php.net/manual/en/regexp.reference.recursive.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="111935">  <div class="votes">
    <div id="Vu111935">
    <a href="/manual/vote-note.php?id=111935&amp;page=regexp.reference.recursive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111935">
    <a href="/manual/vote-note.php?id=111935&amp;page=regexp.reference.recursive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111935" title="81% like this...">
    20
    </div>
  </div>
  <a href="#111935" class="name">
  <strong class="user"><em>horvath at webarticum dot hu</em></strong></a><a class="genanchor" href="#111935"> &para;</a><div class="date" title="2013-04-15 12:07"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111935">
<div class="phpcode"><code><span class="html">With the (?R) item you can link only to the full pattern, because it quasi equals to (?0). You can not use anchors, asserts etc., and you can only check that string CONTAINS a valid hierarchy or not.<br /><br />This is wrong: ^\(((?&gt;[^()]+)|(?R))*\)$<br /><br />However, you can bracketing the full expression, and replace (?R) to the relative link (?-2). This make it reusable. So you can check complex expressions, for example:<br /><span class="default">&lt;?php<br /><br />$bracket_system </span><span class="keyword">= </span><span class="string">"(\\(((?&gt;[^()]+)|(?-2))*\\))"</span><span class="keyword">; </span><span class="comment">// (reuseable)<br /></span><span class="default">$bracket_systems </span><span class="keyword">= </span><span class="string">"((?&gt;[^()]+)?</span><span class="default">$bracket_system</span><span class="string">)*(?&gt;[^()]+)?"</span><span class="keyword">; </span><span class="comment">// (reuseable)<br /></span><span class="default">$equation </span><span class="keyword">= </span><span class="string">"</span><span class="default">$bracket_systems</span><span class="string">=</span><span class="default">$bracket_systems</span><span class="string">"</span><span class="keyword">; </span><span class="comment">// Both side of the equation must be contain valid bracket systems<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/^</span><span class="default">$equation</span><span class="string">\$/"</span><span class="keyword">,</span><span class="string">"a*(a-(2a+2))=4(a+3)-2(a-(a-2))"</span><span class="keyword">)); </span><span class="comment">// Outputs 'int(1)'<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/^</span><span class="default">$equation</span><span class="string">\$/"</span><span class="keyword">,</span><span class="string">"a*(a-(2a+2)=4(a+3)-2(a-(a-2)))"</span><span class="keyword">)); </span><span class="comment">// Outputs 'int(0)'<br /><br /></span><span class="default">?&gt;<br /></span><br />You can also catch multibyte quotes with the 'u' modifier (if you use UTF-8), eg:<br /><span class="default">&lt;?php<br /><br />$quoted </span><span class="keyword">= </span><span class="string">"(»((?&gt;[^»«]+)|(?-2))*«)"</span><span class="keyword">; </span><span class="comment">// (reuseable)<br /></span><span class="default">$prompt </span><span class="keyword">= </span><span class="string">"[\\w ]+: </span><span class="default">$quoted</span><span class="string">"</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/^</span><span class="default">$prompt</span><span class="string">\$/u"</span><span class="keyword">,</span><span class="string">"Your name: »write here«"</span><span class="keyword">)); </span><span class="comment">// Outputs 'int(1)'<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="95568">  <div class="votes">
    <div id="Vu95568">
    <a href="/manual/vote-note.php?id=95568&amp;page=regexp.reference.recursive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95568">
    <a href="/manual/vote-note.php?id=95568&amp;page=regexp.reference.recursive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95568" title="83% like this...">
    12
    </div>
  </div>
  <a href="#95568" class="name">
  <strong class="user"><em>emanueledelgrande at email dot it</em></strong></a><a class="genanchor" href="#95568"> &para;</a><div class="date" title="2010-01-09 03:47"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95568">
<div class="phpcode"><code><span class="html">The recursion in regular expressions is the only way to allow the parsing of HTML code with nested tags of indefinite depth.<br />It seems it's not yet a spreaded practice; not so much contents are available on the web regarding regexp recursion, and until now no user contribute notes have been published on this manual page.<br />I made several tests with complex patterns to get tags with specific attributes or namespaces, studying the recursion of a subpattern only instead of the full pattern.<br />Here's an example that may power a fast LL parser with recursive descent (<a href="http://en.wikipedia.org/wiki/Recursive_descent_parser" rel="nofollow" target="_blank">http://en.wikipedia.org/wiki/Recursive_descent_parser</a>):<br /><br />$pattern = "/&lt;([\w]+)([^&gt;]*?) (([\s]*\/&gt;)| (&gt;((([^&lt;]*?|&lt;\!\-\-.*?\-\-&gt;)| (?R))*)&lt;\/\\1[\s]*&gt;))/xsm";<br /><br />The performances of a preg_match or preg_match_all function call over an avarage (x)HTML document are quite fast and may drive you to chose this way instead of classic DOM object methods, which have a lot of limits and are usually poor in performance with their workarounds, too.<br />I post a sample application in a brief function (easy to be turned into OOP), which returns an array of objects:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// test function:<br /></span><span class="keyword">function </span><span class="default">parse</span><span class="keyword">(</span><span class="default">$html</span><span class="keyword">) {<br />    </span><span class="comment">// I have split the pattern in two lines not to have long lines alerts by the PHP.net form:<br />    </span><span class="default">$pattern </span><span class="keyword">= </span><span class="string">"/&lt;([\w]+)([^&gt;]*?)(([\s]*\/&gt;)|"</span><span class="keyword">.<br />    </span><span class="string">"(&gt;((([^&lt;]*?|&lt;\!\-\-.*?\-\-&gt;)|(?R))*)&lt;\/\\1[\s]*&gt;))/sm"</span><span class="keyword">;<br />    </span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="default">$pattern</span><span class="keyword">, </span><span class="default">$html</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">, </span><span class="default">PREG_OFFSET_CAPTURE</span><span class="keyword">);<br />    </span><span class="default">$elements </span><span class="keyword">= array();<br />    <br />    foreach (</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$match</span><span class="keyword">) {<br />        </span><span class="default">$elements</span><span class="keyword">[] = (object)array(<br />            </span><span class="string">'node' </span><span class="keyword">=&gt; </span><span class="default">$match</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">],<br />            </span><span class="string">'offset' </span><span class="keyword">=&gt; </span><span class="default">$match</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">],<br />            </span><span class="string">'tagname' </span><span class="keyword">=&gt; </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">],<br />            </span><span class="string">'attributes' </span><span class="keyword">=&gt; isset(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">]) ? </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">] : </span><span class="string">''</span><span class="keyword">,<br />            </span><span class="string">'omittag' </span><span class="keyword">=&gt; (</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">][</span><span class="default">1</span><span class="keyword">] &gt; -</span><span class="default">1</span><span class="keyword">), </span><span class="comment">// boolean<br />            </span><span class="string">'inner_html' </span><span class="keyword">=&gt; isset(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">6</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">]) ? </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">6</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">] : </span><span class="string">''<br />        </span><span class="keyword">);<br />    }<br />    return </span><span class="default">$elements</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// random html nodes as example:<br /></span><span class="default">$html </span><span class="keyword">= &lt;&lt;&lt;EOD<br /></span><span class="string">&lt;div id="airport"&gt;<br />    &lt;div geo:position="1.234324,3.455546" class="index"&gt;<br />        &lt;!-- comment test:<br />        &lt;div class="index_top" /&gt;<br />        --&gt;<br />        &lt;div class="element decorator"&gt;<br />                &lt;ul class="lister"&gt;<br />                    &lt;li onclick="javascript:item.showAttribute('desc');"&gt;<br />                        &lt;h3 class="outline"&gt;<br />                            &lt;a href="<a href="http://php.net/manual/en/regexp.reference.recursive.php" rel="nofollow" target="_blank">http://php.net/manual/en/regexp.reference.recursive.php</a>" onclick="openPopup()"&gt;Link&lt;/a&gt;<br />                        &lt;/h3&gt;<br />                        &lt;div class="description"&gt;Sample description&lt;/div&gt;<br />                    &lt;/li&gt;<br />                &lt;/ul&gt;<br />        &lt;/div&gt;<br />        &lt;div class="clean-line"&gt;&lt;/div&gt;<br />    &lt;/div&gt;<br />&lt;/div&gt;<br />&lt;div id="omittag_test" rel="rootChild" /&gt;<br /></span><span class="keyword">EOD;<br /><br /></span><span class="comment">// application:<br /></span><span class="default">$elements </span><span class="keyword">= </span><span class="default">parse</span><span class="keyword">(</span><span class="default">$html</span><span class="keyword">);<br /><br />if (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$elements</span><span class="keyword">) &gt; </span><span class="default">0</span><span class="keyword">) {<br />    echo </span><span class="string">"Elements found: &lt;b&gt;"</span><span class="keyword">.</span><span class="default">count</span><span class="keyword">(</span><span class="default">$elements</span><span class="keyword">).</span><span class="string">"&lt;/b&gt;&lt;br /&gt;"</span><span class="keyword">;<br />    <br />    foreach (</span><span class="default">$elements </span><span class="keyword">as </span><span class="default">$element</span><span class="keyword">) {<br />        echo </span><span class="string">"&lt;p&gt;Tpl node: &lt;pre&gt;"</span><span class="keyword">.</span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">$element</span><span class="keyword">-&gt;</span><span class="default">node</span><span class="keyword">).</span><span class="string">"&lt;/pre&gt;<br />        Tagname: &lt;tt&gt;"</span><span class="keyword">.</span><span class="default">$element</span><span class="keyword">-&gt;</span><span class="default">tagname</span><span class="keyword">.</span><span class="string">"&lt;/tt&gt;&lt;br /&gt;<br />        Attributes: &lt;tt&gt;"</span><span class="keyword">.</span><span class="default">$element</span><span class="keyword">-&gt;</span><span class="default">attributes</span><span class="keyword">.</span><span class="string">"&lt;/tt&gt;&lt;br /&gt;<br />        Omittag: &lt;tt&gt;"</span><span class="keyword">.(</span><span class="default">$element</span><span class="keyword">-&gt;</span><span class="default">omittag </span><span class="keyword">? </span><span class="string">'true' </span><span class="keyword">: </span><span class="string">'false'</span><span class="keyword">).</span><span class="string">"&lt;/tt&gt;&lt;br /&gt;<br />        Inner HTML: &lt;pre&gt;"</span><span class="keyword">.</span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">$element</span><span class="keyword">-&gt;</span><span class="default">inner_html</span><span class="keyword">).</span><span class="string">"&lt;/pre&gt;&lt;/p&gt;"</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="102748">  <div class="votes">
    <div id="Vu102748">
    <a href="/manual/vote-note.php?id=102748&amp;page=regexp.reference.recursive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102748">
    <a href="/manual/vote-note.php?id=102748&amp;page=regexp.reference.recursive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102748" title="81% like this...">
    7
    </div>
  </div>
  <a href="#102748" class="name">
  <strong class="user"><em>Onyxagargaryll</em></strong></a><a class="genanchor" href="#102748"> &para;</a><div class="date" title="2011-03-03 04:49"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102748">
<div class="phpcode"><code><span class="html">Here's an approach to create a multidimensional array according to a string's delimiters, i.e. we want to analyze...<br /><br />"some text (aaa(b(c1)(c2)d)e)(test) more text"<br /><br />... as multidimensional layers.<br /><br /><span class="default">&lt;?php<br />$string </span><span class="keyword">= </span><span class="string">"some text (aaa(b(c1)(c2)d)e)(test) more text"</span><span class="keyword">;<br /><br /></span><span class="comment">/*<br /> * Analyses the string multidimensionally by its opening and closing delimiters<br /> */<br /></span><span class="keyword">function </span><span class="default">recursiveSplit</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$layer</span><span class="keyword">) {<br />    </span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="string">"/\((([^()]*|(?R))*)\)/"</span><span class="keyword">,</span><span class="default">$string</span><span class="keyword">,</span><span class="default">$matches</span><span class="keyword">);<br />    </span><span class="comment">// iterate thru matches and continue recursive split<br />    </span><span class="keyword">if (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">) &gt; </span><span class="default">1</span><span class="keyword">) {<br />        for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]); </span><span class="default">$i</span><span class="keyword">++) {<br />            if (</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">][</span><span class="default">$i</span><span class="keyword">])) {<br />                if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">][</span><span class="default">$i</span><span class="keyword">]) &gt; </span><span class="default">0</span><span class="keyword">) {<br />                    echo </span><span class="string">"&lt;pre&gt;Layer "</span><span class="keyword">.</span><span class="default">$layer</span><span class="keyword">.</span><span class="string">":   "</span><span class="keyword">.</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">][</span><span class="default">$i</span><span class="keyword">].</span><span class="string">"&lt;/pre&gt;&lt;br /&gt;"</span><span class="keyword">;<br />                    </span><span class="default">recursiveSplit</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">][</span><span class="default">$i</span><span class="keyword">], </span><span class="default">$layer </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">);<br />                }<br />            }<br />        }<br />    }<br />}<br /><br /></span><span class="default">recursiveSplit</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /><br /></span><span class="comment">/*<br /><br />Output:<br /><br />Layer 0:   aaa(b(c1)(c2)d)e<br /><br />Layer 1:   b(c1)(c2)d<br /><br />Layer 2:   c1<br /><br />Layer 2:   c2<br /><br />Layer 0:   test<br />*/<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119691">  <div class="votes">
    <div id="Vu119691">
    <a href="/manual/vote-note.php?id=119691&amp;page=regexp.reference.recursive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119691">
    <a href="/manual/vote-note.php?id=119691&amp;page=regexp.reference.recursive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119691" title="80% like this...">
    3
    </div>
  </div>
  <a href="#119691" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#119691"> &para;</a><div class="date" title="2016-08-04 09:11"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119691">
<div class="phpcode"><code><span class="html">sass parse sample<br /><br /><span class="default">&lt;?php<br /><br />$data </span><span class="keyword">= </span><span class="string">'a { b { 1 } c { d { 2 } } }'</span><span class="keyword">;<br /><br /></span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/a (?&lt;R&gt;\{(?:[^{}]+|(?&amp;R))*\})/'</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">, </span><span class="default">$m</span><span class="keyword">);<br /></span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/b (?&lt;R&gt;\{(?:[^{}]+|(?&amp;R))*\})/'</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">, </span><span class="default">$m</span><span class="keyword">);<br /></span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/c (?&lt;R&gt;\{(?:[^{}]+|(?&amp;R))*\})/'</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">, </span><span class="default">$m</span><span class="keyword">);<br /></span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/d (?&lt;R&gt;\{(?:[^{}]+|(?&amp;R))*\})/'</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">, </span><span class="default">$m</span><span class="keyword">);<br /><br /></span><span class="comment">/*<br />Array (<br />    [0] =&gt; a { b { 1 } c { d { 2 } } }<br />    [R] =&gt; { b { 1 } c { d { 2 } } }<br />    [1] =&gt; { b { 1 } c { d { 2 } } }<br />)<br />Array (<br />    [0] =&gt; b { 1 }<br />    [R] =&gt; { 1 }<br />    [1] =&gt; { 1 }<br />)<br />Array (<br />    [0] =&gt; c { d { 2 } }<br />    [R] =&gt; { d { 2 } }<br />    [1] =&gt; { d { 2 } }<br />)<br />Array (<br />    [0] =&gt; d { 2 }<br />    [R] =&gt; { 2 }<br />    [1] =&gt; { 2 }<br />)<br />*/</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125521">  <div class="votes">
    <div id="Vu125521">
    <a href="/manual/vote-note.php?id=125521&amp;page=regexp.reference.recursive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125521">
    <a href="/manual/vote-note.php?id=125521&amp;page=regexp.reference.recursive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125521" title="50% like this...">
    0
    </div>
  </div>
  <a href="#125521" class="name">
  <strong class="user"><em>mzvarik at gmail dot com</em></strong></a><a class="genanchor" href="#125521"> &para;</a><div class="date" title="2020-11-18 10:53"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125521">
<div class="phpcode"><code><span class="html">This regexp can be used for parsing IF conditions.<br /><br />$str = '<br />(IF_MYVAR)My var is printed<br />(OR_MYVARTWO)My var two is printed<br />(OR_ANOTHER)if you use OR you don't have to END everytime<br />(ELSE)Whatever bro(END)<br /><br />(IF_BLUE)Something (IF_SUPERB)super(END) blue - this is simple IF condition(END)<br />';<br /><br />function isCondition($k) {<br />    // put your user conditions here<br />    $conds = [];<br />    $conds['BLUE'] = true;<br />    $conds['MYVARTWO'] = true;<br />    $conds['ELSE'] = true; // always true<br />     return $conds[$k];<br />}<br /><br />function findConditions($str) {<br />    <br />    $pattern = '~ \(if_([^\)]+)\) ((?: (?!\((end|if_)). | (?R) )*+) \(end\) ~xis';<br />    <br />    $str = preg_replace_callback($pattern, function($m) {<br />        <br />        $k = $m[1];<br />        $v = $m[2];<br />        $v = findConditions($v) ?: $v;<br />        <br />        $ors = preg_split('~(?=\((OR_[^\)]+|ELSE))~is', $v);<br />        <br />        $v = array_shift($ors); // hlavní<br />                <br />        if (isCondition($k)) return findConditions($v);<br />        else {<br />            foreach ($ors as $or) {<br />                list($k, $v) = explode(")", $or, 2);<br />                $k = substr($k, 1);<br />                if (isCondition($k)) return findConditions($v);<br />            }<br />        }<br />        return ''; // no matching condition<br />    }, $str);<br />    return $str;<br />};<br /><br />// will output:  Whatever bro  \n\n  Something blue<br />echo findConditions($str);</span></code></div>
  </div>
 </div>
  <div class="note" id="108927">  <div class="votes">
    <div id="Vu108927">
    <a href="/manual/vote-note.php?id=108927&amp;page=regexp.reference.recursive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108927">
    <a href="/manual/vote-note.php?id=108927&amp;page=regexp.reference.recursive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108927" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#108927" class="name">
  <strong class="user"><em>Daniel Klein</em></strong></a><a class="genanchor" href="#108927"> &para;</a><div class="date" title="2012-06-06 04:18"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108927">
<div class="phpcode"><code><span class="html">The order of non-mutually exclusive alternatives within a recursed sub-pattern is important.<br /><span class="default">&lt;?php<br />$pattern </span><span class="keyword">= </span><span class="string">'/^(?&lt;octet&gt;[01]?\d?\d|2[0-4]\d|25[0-5])(?:\.(?P&gt;octet)){3}$/'</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />You might expect that this pattern will match any IP address in dotted-decimal notation (e.g. '123.45.67.89'). The pattern is intended to match four octets in the following ranges: 0-9, 00-99 &amp; 000-255, each separated by a single dot. However, only the first octet can include values from 200-255; the remainder can only have values less than 200. The reason for this is that if the rest of the pattern fails, recursion is not back-tracked into to find an alternative match. The first part of the sub-pattern will match the first two digits of any octet from 200-255. The rest of the pattern will then fail because the third digit in the octet does not match either '\.' or '$'.<br /><br /><span class="default">&lt;?php<br />var_export</span><span class="keyword">(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="default">$pattern</span><span class="keyword">, </span><span class="string">'255.123.45.67'</span><span class="keyword">)); </span><span class="comment">// 1 (true)<br /></span><span class="default">var_export</span><span class="keyword">(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="default">$pattern</span><span class="keyword">, </span><span class="string">'255.200.45.67'</span><span class="keyword">)); </span><span class="comment">// 0 (false)<br /></span><span class="default">var_export</span><span class="keyword">(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="default">$pattern</span><span class="keyword">, </span><span class="string">'255.123.45.200'</span><span class="keyword">)); </span><span class="comment">// 0 (false)<br /></span><span class="default">?&gt;<br /></span><br />The correct pattern is:<br /><span class="default">&lt;?php<br />$pattern </span><span class="keyword">= </span><span class="string">'/^(?&lt;octet&gt;25[0-5]|2[0-4]\d|[01]?\d?\d)(?:\.(?P&gt;octet)){3}$/'</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Note that the first two alternatives are mutually exclusive so their order is unimportant. The third alternative, however, is not mutually exclusive but it will now only match when the first two fail.<br /><br /><span class="default">&lt;?php<br />var_export</span><span class="keyword">(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="default">$pattern</span><span class="keyword">, </span><span class="string">'255.123.45.67'</span><span class="keyword">)); </span><span class="comment">// 1 (true)<br /></span><span class="default">var_export</span><span class="keyword">(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="default">$pattern</span><span class="keyword">, </span><span class="string">'255.200.45.67'</span><span class="keyword">)); </span><span class="comment">// 1 (true)<br /></span><span class="default">var_export</span><span class="keyword">(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="default">$pattern</span><span class="keyword">, </span><span class="string">'255.123.45.200'</span><span class="keyword">)); </span><span class="comment">// 1 (true)<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="111936">  <div class="votes">
    <div id="Vu111936">
    <a href="/manual/vote-note.php?id=111936&amp;page=regexp.reference.recursive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111936">
    <a href="/manual/vote-note.php?id=111936&amp;page=regexp.reference.recursive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111936" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#111936" class="name">
  <strong class="user"><em>horvath at webarticum dot hu</em></strong></a><a class="genanchor" href="#111936"> &para;</a><div class="date" title="2013-04-15 12:09"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111936">
<div class="phpcode"><code><span class="html">Below are some reusable patterns. I used comments with the 'x' modifier for human-readability.<br /><br />You can write also a function, that generates patterns for specified bracket/quote pairs.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/* normal paretheses */<br /></span><span class="default">$simple_pattern </span><span class="keyword">= </span><span class="string">"(    (?#root pattern)<br />  (                     (?#text or expression)<br />    (?&gt;[^\\(\\)]+)      (?#text)<br />    |<br />    \\((?-2)\\)         (?#expression and recursion)<br />  )*<br />)"</span><span class="keyword">;<br /><br /></span><span class="default">$simple_okay_text </span><span class="keyword">= </span><span class="string">"5( 2a + (b - c) ) - a * ( 2b - (c * 3(b - (c + a) ) ) )"</span><span class="keyword">;<br /></span><span class="default">$simple_bad_text </span><span class="keyword">= </span><span class="string">"5( 2)a + (b - c) ) - )a * ( ((2b - (c * 3(b - (c + a) ) ) )"</span><span class="keyword">;<br /><br />echo </span><span class="string">"Simple pattern results:\n"</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/^</span><span class="default">$simple_pattern</span><span class="string">\$/x"</span><span class="keyword">,</span><span class="default">$simple_okay_text</span><span class="keyword">));<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/^</span><span class="default">$simple_pattern</span><span class="string">\$/x"</span><span class="keyword">,</span><span class="default">$simple_bad_text</span><span class="keyword">));<br />echo </span><span class="string">"\n----------\n"</span><span class="keyword">;<br /><br /></span><span class="comment">/* some brackets */<br /></span><span class="default">$full_pattern </span><span class="keyword">= </span><span class="string">"(                  (?#root pattern)<br />  (                                 (?#text or expression)<br />    (?&gt;[^\\(\\)\\{\\}\\[\\]&lt;&gt;]+)    (?#text not contains brackets)<br />    |<br />    (<br />      [\\(\\{\\[&lt;]                  (?#start bracket)<br />        (?(?&lt;=\\()(?-3)\\)|           (?#if normal)<br />        (?(?&lt;=\\{)(?-3)\\}|           (?#if coursed)<br />        (?(?&lt;=\\[)(?-3)\\]|           (?#if squared)<br />        (?1)\\&gt;                       (?#else so if tag)<br />      )))                           (?#close nested-but-logically-the-some-level subpatterns)<br />    )<br />  )*<br />)"</span><span class="keyword">;<br /><br /></span><span class="default">$full_okay_text </span><span class="keyword">= </span><span class="string">"5( 2a + [b - c] ) - a * ( 2b - {c * 3&lt;b - (c + a) &gt; } )"</span><span class="keyword">;<br /></span><span class="default">$full_bad_text </span><span class="keyword">= </span><span class="string">"5[ 2a + [b - c} ) - a * ( 2b - [c * 3(b - c + a) ) ) }"</span><span class="keyword">;<br /><br />echo </span><span class="string">"Full pattern results:\n"</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/^</span><span class="default">$full_pattern</span><span class="string">\$/x"</span><span class="keyword">,</span><span class="default">$simple_okay_text</span><span class="keyword">));<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/^</span><span class="default">$full_pattern</span><span class="string">\$/x"</span><span class="keyword">,</span><span class="default">$full_okay_text</span><span class="keyword">));<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/^</span><span class="default">$full_pattern</span><span class="string">\$/x"</span><span class="keyword">,</span><span class="default">$full_bad_text</span><span class="keyword">));<br />echo </span><span class="string">"\n----------\n"</span><span class="keyword">;<br /><br /></span><span class="comment">/* some brackets and quotes */<br /></span><span class="default">$extrafull_pattern </span><span class="keyword">= </span><span class="string">"(             (?#root pattern)<br />  (                                 (?#text or expression)<br />    (?&gt;[^\\(\\)\\{\\}\\[\\]&lt;&gt;'\"]+) (?#text not contains brackets and quotes)<br />    |<br />    (<br />      ([\\(\\{\\[&lt;'\"])             (?#start bracket)<br />        (?(?&lt;=\\()(?-4)\\)|           (?#if normal)<br />        (?(?&lt;=\\{)(?-4)\\}|           (?#if coursed)<br />        (?(?&lt;=\\[)(?-4)\\]|           (?#if squared)<br />        (?(?&lt;=\\&lt;)(?-4)\\&gt;|           (?#if tag)<br />        ['\"]                         (?#else so if static)<br />      ))))                          (?#close nested-but-logically-the-some-level subpatterns)<br />    )<br />  )*<br />)"</span><span class="keyword">;<br /><br /></span><span class="default">$extrafull_okay_text </span><span class="keyword">= </span><span class="string">"5( 2a + ['b' - c] ) - a * ( 2b - \"{c * 3&lt;b - (c + a) &gt; }\" )"</span><span class="keyword">;<br /></span><span class="default">$extrafull_bad_text </span><span class="keyword">= </span><span class="string">"5( 2a + ['b' - c] ) - a * ( 2b - \"{c * 3&lt;b - (c + a) &gt; }\" )"</span><span class="keyword">;<br /><br />echo </span><span class="string">"Extra-full pattern results:\n"</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/^</span><span class="default">$extrafull_pattern</span><span class="string">\$/x"</span><span class="keyword">,</span><span class="default">$simple_okay_text</span><span class="keyword">));<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/^</span><span class="default">$extrafull_pattern</span><span class="string">\$/x"</span><span class="keyword">,</span><span class="default">$full_okay_text</span><span class="keyword">));<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/^</span><span class="default">$extrafull_pattern</span><span class="string">\$/x"</span><span class="keyword">,</span><span class="default">$extrafull_okay_text</span><span class="keyword">));<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/^</span><span class="default">$extrafull_pattern</span><span class="string">\$/x"</span><span class="keyword">,</span><span class="default">$extrafull_bad_text</span><span class="keyword">));<br /><br /></span><span class="comment">/*<br /><br />Outputs:<br /><br />Simple pattern results:<br />int(0)<br />int(0)<br /><br />----------<br />Full pattern results:<br />int(0)<br />int(0)<br />int(0)<br /><br />----------<br />Extra-full pattern results:<br />int(0)<br />int(0)<br />int(0)<br />int(0)<br /><br />*/<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="101523">  <div class="votes">
    <div id="Vu101523">
    <a href="/manual/vote-note.php?id=101523&amp;page=regexp.reference.recursive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101523">
    <a href="/manual/vote-note.php?id=101523&amp;page=regexp.reference.recursive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101523" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#101523" class="name">
  <strong class="user"><em>jonah at nucleussystems dot com</em></strong></a><a class="genanchor" href="#101523"> &para;</a><div class="date" title="2010-12-21 06:18"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101523">
<div class="phpcode"><code><span class="html">An unexpected behavior came up that introduced a very hard-to-track bug in some code I was working on.  It has to do with the preg_match_all PREG_OFFSET_CAPTURE flag.  When you capture the offset of a sub-match, it's offset is given _relative_ to it's parent.  For example, if you extract the value between &lt; and &gt; recursively in this string:<br /><br />&lt;this is a &lt;string&gt;&gt;<br /><br />You will get an array that looks like this:<br /><br />Array<br />(<br />    [0] =&gt; Array<br />    (<br />        [0] =&gt; Array<br />        (<br />            [0] =&gt; &lt;this is a &lt;string&gt;&gt;<br />            [1] =&gt; 0<br />        )<br />        [1] =&gt; Array<br />        (<br />            [0] =&gt; this is a &lt;string&gt;<br />            [1] =&gt; 1<br />        )<br />    )<br />    [1] =&gt; Array<br />    (<br />        [0] =&gt; Array<br />        (<br />            [0] =&gt; &lt;string&gt;<br />            [1] =&gt; 0<br />        )<br />        [1] =&gt; Array<br />        (<br />            [0] =&gt; string<br />            [1] =&gt; 1<br />        )<br />    )<br />)<br /><br />Notice that the offset in the last index is one, not the twelve we expected.  The best way to solve this problem is to run over the results with a recursive function, adding the parent's offset.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=regexp.reference.recursive&amp;repo=en&amp;redirect=https://www.php.net/manual/en/regexp.reference.recursive.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="reference.pcre.pattern.syntax.php">PCRE regex syntax</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="regexp.introduction.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.delimiters.php" title="Delimiters">Delimiters</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.meta.php" title="Meta-&#8203;characters">Meta-&#8203;characters</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.escape.php" title="Escape sequences">Escape sequences</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.unicode.php" title="Unicode character properties">Unicode character properties</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.anchors.php" title="Anchors">Anchors</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.dot.php" title="Dot">Dot</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.character-classes.php" title="Character classes">Character classes</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.alternation.php" title="Alternation">Alternation</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.internal-options.php" title="Internal option setting">Internal option setting</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.subpatterns.php" title="Subpatterns">Subpatterns</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.repetition.php" title="Repetition">Repetition</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.back-references.php" title="Back references">Back references</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.assertions.php" title="Assertions">Assertions</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.onlyonce.php" title="Once-&#8203;only subpatterns">Once-&#8203;only subpatterns</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.conditional.php" title="Conditional subpatterns">Conditional subpatterns</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.comments.php" title="Comments">Comments</a>
                        </li>
                                                <li class="current">
                            <a href="regexp.reference.recursive.php" title="Recursive patterns">Recursive patterns</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.performance.php" title="Performance">Performance</a>
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
