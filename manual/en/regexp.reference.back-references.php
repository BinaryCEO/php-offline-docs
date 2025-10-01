<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Back references - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/regexp.reference.back-references.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/regexp.reference.back-references.php">
 <link rel="alternate" href="https://www.php.net/manual/en/regexp.reference.back-references.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/reference.pcre.pattern.syntax.php">
 <link rel="prev" href="https://www.php.net/manual/en/regexp.reference.repetition.php">
 <link rel="next" href="https://www.php.net/manual/en/regexp.reference.assertions.php">

 <link rel="alternate" href="https://www.php.net/manual/en/regexp.reference.back-references.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/regexp.reference.back-references.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/regexp.reference.back-references.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/regexp.reference.back-references.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/regexp.reference.back-references.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/regexp.reference.back-references.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/regexp.reference.back-references.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/regexp.reference.back-references.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/regexp.reference.back-references.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/regexp.reference.back-references.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/regexp.reference.back-references.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Back references" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Back references - Manual" />
<meta name="twitter:description" content="Back references" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Back references - Manual" />
<meta itemprop="description" content="Back references" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Back references" />

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
        <a href="regexp.reference.assertions.php">
          Assertions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="regexp.reference.repetition.php">
          &laquo; Repetition        </a>
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
            <option value='en/regexp.reference.back-references.php' selected="selected">English</option>
            <option value='de/regexp.reference.back-references.php'>German</option>
            <option value='es/regexp.reference.back-references.php'>Spanish</option>
            <option value='fr/regexp.reference.back-references.php'>French</option>
            <option value='it/regexp.reference.back-references.php'>Italian</option>
            <option value='ja/regexp.reference.back-references.php'>Japanese</option>
            <option value='pt_BR/regexp.reference.back-references.php'>Brazilian Portuguese</option>
            <option value='ru/regexp.reference.back-references.php'>Russian</option>
            <option value='tr/regexp.reference.back-references.php'>Turkish</option>
            <option value='uk/regexp.reference.back-references.php'>Ukrainian</option>
            <option value='zh/regexp.reference.back-references.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="regexp.reference.back-references" class="section">
  <h2 class="title">Back references</h2>
  <p class="para">
   Outside a character class, a backslash followed by a digit
   greater than 0 (and possibly further digits) is a back
   reference to a capturing subpattern earlier (i.e. to its
   left) in the pattern, provided there have been that many
   previous capturing left parentheses.
  </p>
  <p class="para">
   However, if the decimal number following the backslash is
   less than 10, it is always taken as a back reference, and
   causes an error only if there are not that many capturing
   left parentheses in the entire pattern. In other words, the
   parentheses that are referenced need not be to the left of
   the reference for numbers less than 10.
   A &quot;forward back reference&quot; can make sense when a repetition
   is involved and the subpattern to the right has participated
   in an earlier iteration. See the section
   <a href="regexp.reference.escape.php" class="link">escape sequences</a> for further details of the handling
   of digits following a backslash.
  </p>
  <p class="para">
   A back reference matches whatever actually matched the capturing
   subpattern in the current subject string, rather than
   anything matching the subpattern itself. So the pattern

   <code class="literal">(sens|respons)e and \1ibility</code>

   matches &quot;sense and sensibility&quot; and &quot;response and responsibility&quot;,
   but not &quot;sense and responsibility&quot;. If case-sensitive (caseful)
   matching is in force at the time of the back reference, then
   the case of letters is relevant. For example,

   <code class="literal">((?i)rah)\s+\1</code>

   matches &quot;rah rah&quot; and &quot;RAH RAH&quot;, but not &quot;RAH rah&quot;, even
   though the original capturing subpattern is matched
   case-insensitively (caselessly).
  </p>
  <p class="para">
   There may be more than one back reference to the same subpattern.
   If a subpattern has not actually been used in a
   particular match, then any back references to it always
   fail. For example, the pattern

   <code class="literal">(a|(bc))\2</code>

   always fails if it starts to match &quot;a&quot; rather than &quot;bc&quot;.
   Because there may be up to 99 back references, all digits
   following the backslash are taken as part of a potential
   back reference number. If the pattern continues with a digit
   character, then some delimiter must be used to terminate the
   back reference. If the <a href="reference.pcre.pattern.modifiers.php" class="link">PCRE_EXTENDED</a> option
   is set, this can be whitespace. Otherwise an empty comment can be used.
  </p>
  <p class="para">
   A back reference that occurs inside the parentheses to which
   it refers fails when the subpattern is first used, so, for
   example, (a\1) never matches. However, such references can
   be useful inside repeated subpatterns. For example, the pattern

   <code class="literal">(a|b\1)+</code>

   matches any number of &quot;a&quot;s and also &quot;aba&quot;, &quot;ababba&quot; etc. At
   each iteration of the subpattern, the back reference matches
   the character string corresponding to the previous iteration.
   In order for this to work, the pattern must be such
   that the first iteration does not need to match the back
   reference. This can be done using alternation, as in the
   example above, or by a quantifier with a minimum of zero.
  </p>
  <p class="para">
   The <code class="literal">\g</code> escape sequence can be
   used for absolute and relative referencing of subpatterns.
   This escape sequence must be followed by an unsigned number or a negative
   number, optionally enclosed in braces. The sequences <code class="literal">\1</code>,
   <code class="literal">\g1</code> and <code class="literal">\g{1}</code> are synonymous
   with one another. The use of this pattern with an unsigned number can
   help remove the ambiguity inherent when using digits following a
   backslash. The sequence helps to distinguish back references from octal
   characters and also makes it easier to have a back reference followed
   by a literal number, e.g. <code class="literal">\g{2}1</code>.
  </p>
  <p class="para">
   The use of the <code class="literal">\g</code> sequence with a negative number
   signifies a relative reference. For example, <code class="literal">(foo)(bar)\g{-1}</code>
   would match the sequence &quot;foobarbar&quot; and <code class="literal">(foo)(bar)\g{-2}</code>
   matches &quot;foobarfoo&quot;. This can be useful in long patterns as an alternative
   to keeping track of the number of subpatterns in order to reference
   a specific previous subpattern.
  </p>
  <p class="para">
   Back references to the named subpatterns can be achieved by
   <code class="literal">(?P=name)</code>,
   <code class="literal">\k&lt;name&gt;</code>, <code class="literal">\k&#039;name&#039;</code>,
   <code class="literal">\k{name}</code>, <code class="literal">\g{name}</code>,
   <code class="literal">\g&lt;name&gt;</code> or <code class="literal">\g&#039;name&#039;</code>.
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
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fregexp.reference.back-references%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=regexp.reference.back-references&amp;repo=en&amp;redirect=https://www.php.net/manual/en/regexp.reference.back-references.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="119566">  <div class="votes">
    <div id="Vu119566">
    <a href="/manual/vote-note.php?id=119566&amp;page=regexp.reference.back-references&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119566">
    <a href="/manual/vote-note.php?id=119566&amp;page=regexp.reference.back-references&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119566" title="67% like this...">
    13
    </div>
  </div>
  <a href="#119566" class="name">
  <strong class="user"><em>mnvx at yandex dot ru</em></strong></a><a class="genanchor" href="#119566"> &para;</a><div class="date" title="2016-07-07 09:35"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119566">
<div class="phpcode"><code><span class="html">Something similar opportunity is DEFINE.<br /><br />Example:<br />    (?(DEFINE)(?&lt;myname&gt;\bvery\b))(?&amp;myname)\p{Pd}(?&amp;myname).<br /><br />Expression above will match "very-very" from next sentence:<br />    Define is very-very handy sometimes.<br />              ^-------^<br /><br />How it works. (?(DEFINE)(?&lt;myname&gt;\bvery\b)) - this block defines "myname" equal to "\bvery\b". So, this block "(?&amp;myname)\p{Pd}(?&amp;myname)" equvivalent to "\bvery\b\p{Pd}\bvery\b".</span></code></div>
  </div>
 </div>
  <div class="note" id="127718">  <div class="votes">
    <div id="Vu127718">
    <a href="/manual/vote-note.php?id=127718&amp;page=regexp.reference.back-references&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127718">
    <a href="/manual/vote-note.php?id=127718&amp;page=regexp.reference.back-references&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127718" title="66% like this...">
    1
    </div>
  </div>
  <a href="#127718" class="name">
  <strong class="user"><em>Steve</em></strong></a><a class="genanchor" href="#127718"> &para;</a><div class="date" title="2022-10-12 09:22"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127718">
<div class="phpcode"><code><span class="html">The escape sequence \g used as a backreference may not always behave as expected.<br />The following numbered backreferences refer to the text matching the specified capture group, as documented:<br />\1<br />\g1<br />\g{1}<br />\g-1<br />\g{-1}<br /><br />However, the following variants refer to the subpattern code instead of the matched text:<br />\g&lt;1&gt;<br />\g'1'<br />\g&lt;-1&gt;<br />\g'-1'<br /><br />With named backreferences, we may also use the \k escape sequence as well as the (?P=...) construct. The following combinations also refer to the text matching the named capture group, as documented:<br />\g{name}<br />\k{name}<br />\k&lt;name&gt;<br />\k'name'<br />(?P=name)<br /><br />However, these refer to the subpattern code instead of the matched text:<br />g&lt;name&gt;<br />\g'name'<br /><br />In the following example, the capture group searches for a single letter 'a' or 'b', and then the backreference looks for the same letter. Thus, the patterns are expected to match 'aa' and 'bb', but not 'ab' nor 'ba'.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/* Matches to the following patterns are replaced by 'xx' in the subject string 'aa ab ba bb'. */<br /></span><span class="default">$patterns </span><span class="keyword">= [<br />  </span><span class="comment"># numbered backreferences (absolute)<br />  </span><span class="string">'/([ab])\1/'</span><span class="keyword">,      </span><span class="comment">// 'xx ab ba xx'<br />  </span><span class="string">'/([ab])\g1/'</span><span class="keyword">,     </span><span class="comment">// 'xx ab ba xx'<br />  </span><span class="string">'/([ab])\g{1}/'</span><span class="keyword">,   </span><span class="comment">// 'xx ab ba xx'<br />  </span><span class="string">'/([ab])\g&lt;1&gt;/'</span><span class="keyword">,   </span><span class="comment">// 'xx xx xx xx' # unexpected behavior, backreference matches both 'a' and 'b'.<br />  </span><span class="string">"/([ab])\g'1'/"</span><span class="keyword">,   </span><span class="comment">// 'xx xx xx xx' # unexpected behavior, backreference matches both 'a' and 'b'.<br />  </span><span class="string">'/([ab])\k{1}/'</span><span class="keyword">,   </span><span class="comment">// 'aa ab ba bb' # No group with name "1", backreference to unset group always fails.<br />  </span><span class="string">'/([ab])\k&lt;1&gt;/'</span><span class="keyword">,   </span><span class="comment">// 'aa ab ba bb' # No group with name "1", backreference to unset group always fails.<br />  </span><span class="string">"/([ab])\k'1'/"</span><span class="keyword">,   </span><span class="comment">// 'aa ab ba bb' # No group with name "1", backreference to unset group always fails.<br />  </span><span class="string">'/([ab])(?P=1)/'</span><span class="keyword">,  </span><span class="comment">// NULL # Regex error: "subpattern name must start with a non-digit", (?P=) expects name not number.<br />  # numbered backreferences (relative)<br />  </span><span class="string">'/([ab])\-1/'</span><span class="keyword">,     </span><span class="comment">// 'aa ab ba bb'<br />  </span><span class="string">'/([ab])\g-1/'</span><span class="keyword">,    </span><span class="comment">// 'xx ab ba xx'<br />  </span><span class="string">'/([ab])\g{-1}/'</span><span class="keyword">,  </span><span class="comment">// 'xx ab ba xx'<br />  </span><span class="string">'/([ab])\g&lt;-1&gt;/'</span><span class="keyword">,  </span><span class="comment">// 'xx xx xx xx' # unexpected behavior, backreference matches both 'a' and 'b'.<br />  </span><span class="string">"/([ab])\g'-1'/"</span><span class="keyword">,  </span><span class="comment">// 'xx xx xx xx' # unexpected behavior, backreference matches both 'a' and 'b'.<br />  </span><span class="string">'/([ab])\k{-1}/'</span><span class="keyword">,  </span><span class="comment">// 'aa ab ba bb' # No group with name "-1", backreference to unset group always fails.<br />  </span><span class="string">'/([ab])\k&lt;-1&gt;/'</span><span class="keyword">,  </span><span class="comment">// 'aa ab ba bb' # No group with name "-1", backreference to unset group always fails.<br />  </span><span class="string">"/([ab])\k'-1'/"</span><span class="keyword">,  </span><span class="comment">// 'aa ab ba bb' # No group with name "-1", backreference to unset group always fails.<br />  </span><span class="string">'/([ab])(?P=-1)/'</span><span class="keyword">, </span><span class="comment">// NULL # Regex error: "subpattern name expected", (?P=) expects name not number.<br />  # named backreferences<br />  </span><span class="string">'/(?&lt;name&gt;[ab])\g{name}/'</span><span class="keyword">,  </span><span class="comment">// 'xx ab ba xx'<br />  </span><span class="string">'/(?&lt;name&gt;[ab])\g&lt;name&gt;/'</span><span class="keyword">,  </span><span class="comment">// 'xx xx xx xx' # unexpected behavior, backreference matches both 'a' and 'b'.<br />  </span><span class="string">"/(?&lt;name&gt;[ab])\g'name'/"</span><span class="keyword">,  </span><span class="comment">// 'xx xx xx xx' # unexpected behavior, backreference matches both 'a' and 'b'.<br />  </span><span class="string">'/(?&lt;name&gt;[ab])\k{name}/'</span><span class="keyword">,  </span><span class="comment">// 'xx ab ba xx'<br />  </span><span class="string">'/(?&lt;name&gt;[ab])\k&lt;name&gt;/'</span><span class="keyword">,  </span><span class="comment">// 'xx ab ba xx'<br />  </span><span class="string">"/(?&lt;name&gt;[ab])\k'name'/"</span><span class="keyword">,  </span><span class="comment">// 'xx ab ba xx'<br />  </span><span class="string">'/(?&lt;name&gt;[ab])(?P=name)/'</span><span class="keyword">, </span><span class="comment">// 'xx ab ba xx'<br /></span><span class="keyword">];<br />    <br />foreach (</span><span class="default">$patterns </span><span class="keyword">as </span><span class="default">$pat</span><span class="keyword">)<br />    echo </span><span class="string">"  '</span><span class="default">$pat</span><span class="string">',\t// " </span><span class="keyword">. </span><span class="default">var_export</span><span class="keyword">(@</span><span class="default">preg_replace</span><span class="keyword">(</span><span class="default">$pat</span><span class="keyword">, </span><span class="string">'xx'</span><span class="keyword">, </span><span class="string">'aa ab ba bb'</span><span class="keyword">), </span><span class="default">1</span><span class="keyword">) . </span><span class="default">PHP_EOL</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=regexp.reference.back-references&amp;repo=en&amp;redirect=https://www.php.net/manual/en/regexp.reference.back-references.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
                                                <li class="">
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
