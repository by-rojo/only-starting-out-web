import cNames from 'classnames'
import Link from 'next/link'
import React, { useState, useEffect } from 'react'
import { SITE_NAME, NAV_BREAKPOINT } from '../../constants'
import useStaticHomePageData from '../home-page/hooks'
import styles from './style.module.scss'
import { useInView } from 'react-intersection-observer'

const NavBar: React.FC<{ forceInView?: boolean }> = ({
  forceInView = false,
}) => {
  const { menu } = useStaticHomePageData()
  const [hoveredMenuItemID, setHoveredMenuItemID] = useState(-1)
  const [toggled, setToggled] = useState(false)
  const [navClass, setNavClass] = useState('')
  const onOpenDropdown = (ID: number) => {
    if (window.innerWidth > NAV_BREAKPOINT) setHoveredMenuItemID(ID)
  }

  const onCloseDropdown = () => {
    if (window.innerWidth > NAV_BREAKPOINT) setHoveredMenuItemID(-1)
  }

  const getDropdownProps = (ID: number) => {
    return {
      onMouseEnter: () => onOpenDropdown(ID),
      onMouseLeave: () => onCloseDropdown(),
      onFocus: () => onOpenDropdown(ID),
    }
  }

  const { ref, inView } = useInView({
    threshold: 1,
  })

  useEffect(() => {
    if (!inView || forceInView) {
      setNavClass('navbar-light bg-white shadow-sm')
    } else {
      setNavClass('navbar-dark')
    }
  }, [inView, forceInView])

  return (
    <>
      <span ref={ref} className="nav-observer" />
      <nav
        className={cNames(
          'navbar sticky-top navbar-expand-lg',
          styles.navBar,
          navClass
        )}
      >
        <div className="container">
          <Link passHref href="/">
            <a className="navbar-brand">{SITE_NAME}</a>
          </Link>
          <button
            onClick={() => setToggled(!toggled)}
            className="navbar-toggler"
            type="button"
            aria-controls="navbarText"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span className="navbar-toggler-icon"></span>
          </button>
          <div
            className={cNames('navbar-collapse', 'collapse', {
              show: toggled,
            })}
          >
            <div className="navbar-nav me-auto mb-2 mb-lg-0 w-100 justify-content-end">
              {menu?.data?.map((menuItem) => {
                const isDropdown = menuItem?.child_items?.length > 0
                return (
                  <div
                    className={cNames('nav-item', 'dropdown', 'me-4')}
                    key={menuItem.ID}
                  >
                    <>
                      <Link href={menuItem.url} passHref>
                        <a
                          {...getDropdownProps(menuItem.ID)}
                          className={cNames('nav-link', 'fw-bold', {
                            'dropdown-toggle': isDropdown,
                            'btn btn-primary text-white':
                              menuItem.title === 'Get Started',
                          })}
                          role="button"
                          aria-expanded="false"
                        >
                          {menuItem.title}
                        </a>
                      </Link>
                      {isDropdown && (
                        <div
                          {...getDropdownProps(menuItem.ID)}
                          className={cNames({
                            'dropdown-menu': isDropdown,
                            show: menuItem.ID === hoveredMenuItemID,
                          })}
                        >
                          {menuItem?.child_items?.map((childMenuItem) => {
                            return (
                              <Link
                                key={childMenuItem.ID}
                                href={childMenuItem.url}
                                passHref
                              >
                                <a
                                  tabIndex={0}
                                  className="nav-link dropdown-item"
                                  onClick={() => onCloseDropdown()}
                                  onFocus={() => onOpenDropdown(menuItem.ID)}
                                >
                                  {childMenuItem.title}
                                </a>
                              </Link>
                            )
                          })}
                        </div>
                      )}
                    </>
                  </div>
                )
              })}
            </div>
          </div>
        </div>
      </nav>
    </>
  )
}

export default NavBar
