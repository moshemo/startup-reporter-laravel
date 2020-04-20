require('./bootstrap');
import { hamburgerJs } from './components/hamburger'

document.onreadystatechange = function() {
  if (document.readyState === 'interactive') {
    hamburgerJs()
  }
};
