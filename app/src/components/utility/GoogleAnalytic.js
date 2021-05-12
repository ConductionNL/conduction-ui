export function registerAction(actionName, path) {
  window.gtag('event', 'page_view', {
    page_title: actionName,
    page_location: actionName,
    page_path: path
  })
}
