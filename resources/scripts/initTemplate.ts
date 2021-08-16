import Alpine from 'alpinejs'

type InitData = {
  dark: boolean
  isSideMenuOpen: boolean
  toggleTheme(): void
  toggleSideMenu(): void
  closeSideMenu(): void
}

function init(): InitData {
  function getThemeFromLocalStorage(): boolean {
    if (window.localStorage.getItem('dark')) {
      return JSON.parse(window.localStorage.getItem('dark') ?? '')
    }

    return (
      !!window.matchMedia &&
      window.matchMedia('(prefers-color-scheme: dark)').matches
    )
  }

  function setThemeToLocalStorage(value: boolean) {
    window.localStorage.setItem('dark', String(value))
  }

  return {
    dark: getThemeFromLocalStorage(),
    toggleTheme() {
      this.dark = !this.dark
      setThemeToLocalStorage(this.dark)
    },
    isSideMenuOpen: false,
    toggleSideMenu() {
      this.isSideMenuOpen = !this.isSideMenuOpen
    },
    closeSideMenu() {
      this.isSideMenuOpen = false
    }
  }
}

Alpine.data('init', init)
