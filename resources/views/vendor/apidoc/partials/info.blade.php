# Introduction

Welcome to the documentation for osu!api v2. You can use this API to get information on various circles and those who click them.

<aside class="warning">
WARNING: The API in under heavy development and has not stabilised yet. If you choose to use it at this stage, you do so at your own risk. Endpoints may appear, disappear, be renamed and completely change behaviour without warning.
</aside>

Note that while we endeavour to keep this documentation up to date, consider it a work-in-progress and note that it will likely contains errors.

Code examples are provided in the dark area to the right, you can use the tabs at the top of the page to switch between bash and javascript samples.

@if($showPostmanCollectionButton)
If you use [Postman](https://getpostman.com), you can [download a collection here]({{url($outputPath.'/collection.json')}}).
@endif

# Endpoint

## Base URL

The base URL is: `https://osu.ppy.sh/api/[version]/`

## API Versions

This is combined with the base endpoint to determine where requests should be sent.

Version | Status
------- | ---------------------------------------------------------------
v2      | current _(not yet public, consider unstable and expect breaking changes)_
v1      | _legacy api provided by the old site, will be deprecated soon_

# Authentication

```shell
# With shell, you can just pass the correct header with each request
curl "https://osu.ppy.sh/api/[version]/[endpoint]"
  -H "Authorization: Bearer @{{token}}"
```

> Make sure to replace `@{{token}}` with your OAuth2 token.

<aside class="warning">
Public access is not yet available, thus this section is incomplete.
</aside>

osu!api uses OAuth2 to grant access to the API. You can register for access `[somewhere eventually]`.

osu!api requires a valid token to be included with all API requests in a header that looks like the following:

`Authorization: Bearer @{{token}}`

<aside class="notice">
You must replace <code>@{{token}}</code> with your OAuth2 token.
</aside>
